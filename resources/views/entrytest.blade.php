
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <div class="container">
        <div class="row">
            <form method="POST" action="{{ route('create') }}" enctype="multipart/form-data" >
            @csrf
            <div class="col-md-12">
                <div class="form-floating">
                    <input type="text" name="Hotels" class="form-control @error('Hotels') is-invalid @enderror"
                        id="Hotels" value="{{ old('Hotels') }}" required autocomplete="Hotels">
                    <label for="Hotels">Place</label>
                    @error('Hotels')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group mb-4">
                <label for="Type" class="fw-bold pb-2">What type of food do you prefer?</label>
                <select id="Type" name="Type" class="form-select form-select-md @error('Type') is-invalid @enderror" aria-label="Food type select">
                    <option selected disabled>Open this select menu</option>
                    <option value="Egyptian">Egyptian</option>
                    <option value="Fast Food">Fast Food</option>
                    <option value="European">European</option>
                    <option value="Seafood">Seafood</option>
                </select>
                @error('Type')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>


            <div class="col-md-12">
                <div class="form-floating">
                    <input type="text" name="Rating"
                        class="form-control @error('Rating') is-invalid @enderror" id="Rating"
                        autocomplete="Rating">
                    <label for="Rating">Rating</label>
                    @error('Rating')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-floating">
                    <input type="text" name="Popularity"
                        class="form-control @error('Popularity') is-invalid @enderror" id="Popularity"
                        autocomplete="Popularity">
                    <label for="Popularity">Popularity</label>
                    @error('Popularity')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-floating">
                    <input type="text" name="Opening_Hours"
                        class="form-control @error('Opening_Hours') is-invalid @enderror" id="Opening_Hours"
                        autocomplete="Opening_Hours">
                    <label for="Average_Cost">Opening_Hours</label>
                    @error('Opening_Hours')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-floating">
                    <input type="text" name="Facilities"
                        class="form-control @error('Facilities') is-invalid @enderror" id="Facilities"
                        autocomplete="Facilities">
                    <label for="Facilities">Facilities</label>
                    @error('Facilities')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-floating">
                    <input type="text" name="Budget"
                        class="form-control @error('Budget') is-invalid @enderror" id="Budget"
                        autocomplete="Budget">
                    <label for="Budget">Budget</label>
                    @error('Budget')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-floating">
                    <textarea type="textarea" name="details"
                        class="form-control @error('details') is-invalid @enderror" id="details" row="5" style="height:250px"
                        autocomplete="details"></textarea>
                    <label for="details">details</label>
                    @error('details')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>




            <button type="submit" class="btn btn-primary" >Submit</button>
            </form>
        </div>
    </div>
    <!DOCTYPE html>
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
            <form action="/submit" method="POST">
                <div class="form-group">
                    <label for="patient_id">Patient ID</label>
                    <input class="form-control @error('details') is-invalid @enderror" type="text" id="patient_id" name="patient_id" required>
                    @error('patient_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="height">Height (cm)</label>
                    <input class="form-control @error('details') is-invalid @enderror" type="number" id="height" name="height" step="0.1" required>
                    @error('patient_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="form-group">
                    <label for="weight">Weight (kg)</label>
                    <input class="form-control @error('details') is-invalid @enderror" type="number" id="weight" name="weight" step="0.1" required>
                    @error('patient_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="form-group">
                    <label for="number_of_pregnacies">Number of Pregnancies</label>
                    <input class="form-control @error('details') is-invalid @enderror"  type="number" id="number_of_pregnacies" name="number_of_pregnacies" required>
                    @error('patient_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="form-group">
                    <label for="glucose_level">Glucose Level</label>
                    <input class="form-control @error('details') is-invalid @enderror"  type="number" id="glucose_level" name="glucose_level" step="0.1" required>
                    @error('patient_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="form-group">
                    <label for="skin_thickness">Skin Thickness (mm)</label>
                    <input class="form-control @error('details') is-invalid @enderror" type="number" id="skin_thickness" name="skin_thickness" step="0.1" required>
                    @error('patient_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="form-group">
                    <label for="activity_level">Activity Level</label>
                    <input class="form-control @error('details') is-invalid @enderror" type="text" id="activity_level" name="activity_level" required>
                    @error('patient_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="form-group">
                    <label for="insulin_level">Insulin Level</label>
                    <input  class="form-control @error('details') is-invalid @enderror" type="number" id="insulin_level" name="insulin_level" step="0.1" required>
                    @error('patient_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="form-group">
                    <label for="BMI">BMI</label>
                    <input class="form-control @error('details') is-invalid @enderror" type="number" id="BMI" name="BMI" step="0.1" required>
                    @error('patient_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="form-group">
                    <label for="outcome">Outcome</label>
                    <input class="form-control @error('details') is-invalid @enderror"  type="text" id="outcome" name="outcome" required>
                    @error('patient_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="form-group">
                    <label for="Age">Age</label>
                    <input class="form-control @error('details') is-invalid @enderror"  type="number" id="Age" name="Age" required>
                    @error('patient_id')
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



