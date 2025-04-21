<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css"> <!-- Link to external CSS if needed -->
    <title>Reserve a Football Field</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color:  #2e7d32; /* Lighter green for background */
            color:#ffeb3b; /* Dark text for readability */
        }
    
        #form-container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            background:  #4caf50;
            border: 1px solid #66bb6a; /* Field theme - green border */
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow */
        }
    
        h2 {
            text-align: center;
            color: #ffeb3b; /* Football field green */
        }
    
        .step {
            display: none;
        }
    
        .active {
            display: block;
        }
    
        button {
            background-color: #2e7d32; /* Green background */
            color: white; /* White text */
            border: none;
            border-radius: 5px; /* Rounded corners */
            padding: 10px 15px; /* Padding for button */
            cursor: pointer; /* Pointer cursor on hover */
            transition: background-color 0.3s; /* Smooth transition */
            display: block;
            margin: 20px auto; /* Center the button */
        }
    
        button:hover {
            background-color: #57a052; /* Darker green on hover */
        }
    
        label {
            display: block; /* Labels stack on each line */
            margin-bottom: 5px; /* Space below labels */
        }
    
        select, input[type="text"], input[type="tel"], input[type="number"], input[type="email"], input[type="file"], input[type="date"], input[type="time"] {
            background-color:#2e7d32;
            width: 95%; /* Full width */
            padding: 8px;
            border: 1px solid #66bb6a; /* Green border for inputs */
            border-radius: 5px; /* Rounded corners */
            margin-top: 5px; /* Space above inputs */
        }
    
        input.error {
            border-color: red; /* Red border for errors */
        }
    
    </style>
</head>
<body>

    <div id="form-container">
        <h2>Reserve a Football Field</h2>

        <div class="step active" id="step1">
            <h3>Step 1: Personal Information</h3>
            <label>Name: <input type="text" id="name" required></label><br>
            <label>Phone Number: <input type="tel" id="phone" required></label><br>
            <label>Age: <input type="number" id="age" required></label><br>
            <label>Email: <input type="email" id="email" required></label><br>
            <label>Personal ID: <input type="file" id="personal-id" required></label><br>
            <button onclick="nextStep(1)">Next</button>
        </div>

        <div class="step" id="step2">
            <h3>Step 2: Preferred Field</h3>
            <label>Field: 
                <select id="field" required>
                    <option value="" disabled selected>Select Field</option>
                    <option value="Field A">Field A</option>
                    <option value="Field B">Field B</option>
                    <option value="Field C">Field C</option>
                    <option value="Field D">Field D</option>
                    <option value="Field E">Field E</option>
                </select>
            </label><br>
            <label>Date: <input type="date" id="date" required></label><br>
            <label>Time: <input type="time" id="time" required></label><br>
            <label>Duration (hours): <input type="number" id="duration" required></label><br>
            <button onclick="nextStep(2)">Next</button>
        </div>

        <div class="step" id="step3">
            <h3>Step 3: How to Pay</h3>
            <label>
                <input type="radio" name="payment" value="cash" required> Cash
            </label><br>
            <label>
                <input type="radio" name="payment" value="instapay" required> Instapay
            </label><br>
            <label>
                <input type="radio" name="payment" value="vodafonecash" required> Vodafone Cash
            </label><br>
            <button onclick="submitForm()">Submit Reservation</button>
        </div>
    </div>

    <script>
        function nextStep(currentStep) {
            // Validate required fields in the current step
            const inputs = document.querySelectorAll(`#step${currentStep} input[required], #step${currentStep} select[required]`);
            let valid = true;
            inputs.forEach(input => {
                if (!input.value) {
                    valid = false;
                    input.classList.add('error');  // Optional: Add a class for styling errors
                } else {
                    input.classList.remove('error');  // Remove error class if valid
                }
            });

            if (valid) {
                document.getElementById(`step${currentStep}`).classList.remove('active');
                document.getElementById(`step${currentStep + 1}`).classList.add('active');
            } else {
                alert('Please complete all fields before proceeding.');
            }
        }

        function submitForm() {
            // Here you would normally handle the submission
            alert('Reservation submitted!');
        }
    </script>

</body>
</html>