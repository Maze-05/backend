<?php


namespace App\Http\Controllers;

use App\Models\Field;          // Add this
use App\Models\Reservation;    // Add this
use Illuminate\Http\Request;
use Illuminate\Support\Carbon; // or use Carbon\Carbon;


class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'field_id' => 'required|exists:fields,id',
            'start_time' => 'required|date',
            'end_time' => 'required|date|after:start_time',
        ]);
    
        // Calculate price (you can add logic here)
        $field = Field::find($validated['field_id']);
        $hours = Carbon::parse($validated['start_time'])->diffInHours($validated['end_time']);
        $totalPrice = $field->price_per_hour * $hours;
    
        $reservation = Reservation::create([
            ...$validated,
            'total_price' => $totalPrice,
            'status' => 'confirmed',
        ]);
    
        return response()->json($reservation, 201);
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
