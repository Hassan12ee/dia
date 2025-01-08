
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif

    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Diabetes Data Entry</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f9;
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }
            .form-container {
                background: #ffffff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                width: 100%;
                max-width: 400px;
            }
            .form-container h2 {
                text-align: center;
                margin-bottom: 20px;
            }
            .form-group {
                margin-bottom: 15px;
            }
            .form-group label {
                display: block;
                margin-bottom: 5px;
                font-weight: bold;
            }
            .form-group input {
                width: 100%;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
            }
            .form-group input[type="submit"] {
                background-color: #4CAF50;
                color: white;
                border: none;
                cursor: pointer;
            }
            .form-group input[type="submit"]:hover {
                background-color: #45a049;
            }
        </style>
    </head>
    <body>
        <div class="form-container">
            <h2>Diabetes Data Entry</h2>
            <form action="{{ route('create') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="patient_id">Patient ID</label>
                    <input class="form-control @error('patient_id') is-invalid @enderror" type="text" id="patient_id" name="patient_id" required>
                    @error('patient_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="height">Height (cm)</label>
                    <input class="form-control @error('height') is-invalid @enderror" type="number" id="height" name="height" step="0.1" required>
                    @error('height')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="form-group">
                    <label for="weight">Weight (kg)</label>
                    <input class="form-control @error('weight') is-invalid @enderror" type="number" id="weight" name="weight" step="0.1" required>
                    @error('weight')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="form-group">
                    <label for="number_of_pregnacies">Number of Pregnancies</label>
                    <input class="form-control @error('number_of_pregnacies') is-invalid @enderror"  type="number" id="number_of_pregnacies" name="number_of_pregnacies" required>
                    @error('number_of_pregnacies')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="form-group">
                    <label for="glucose_level">Glucose Level</label>
                    <input class="form-control @error('glucose_level') is-invalid @enderror"  type="number" id="glucose_level" name="glucose_level" step="0.1" required>
                    @error('glucose_level')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="form-group">
                    <label for="skin_thickness">Skin Thickness (mm)</label>
                    <input class="form-control @error('skin_thickness') is-invalid @enderror" type="number" id="skin_thickness" name="skin_thickness" step="0.1" required>
                    @error('skin_thickness')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="form-group">
                    <label for="activity_level">Activity Level</label>
                    <input class="form-control @error('activity_level') is-invalid @enderror" type="text" id="activity_level" name="activity_level" required>
                    @error('activity_level')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="form-group">
                    <label for="insulin_level">Insulin Level</label>
                    <input  class="form-control @error('insulin_level') is-invalid @enderror" type="number" id="insulin_level" name="insulin_level" step="0.1" required>
                    @error('insulin_level')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="form-group">
                    <label for="BMI">BMI</label>
                    <input class="form-control @error('BMI') is-invalid @enderror" type="number" id="BMI" name="BMI" step="0.1" required>
                    @error('BMI')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="form-group">
                    <label for="outcome">Outcome</label>
                    <input class="form-control @error('outcome') is-invalid @enderror"  type="text" id="outcome" name="outcome" required>
                    @error('outcome')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="form-group">
                    <label for="Age">Age</label>
                    <input class="form-control @error('Age') is-invalid @enderror"  type="number" id="Age" name="Age" required>
                    @error('Age')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="form-group">
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>
    </body>
    </html>



