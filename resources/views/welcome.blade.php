<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nedamco Employees Feedback Request</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .card {
            margin: 0 auto;
            margin-top: 50px;
            max-width: 600px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            border-radius: 5px;
        }
        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }
        .card-header {
            background-color: #007bff;
            color: white;
            text-align: center;
        }
       .card-cent {
        text-align: center;
       }
        .card-title {
            margin-top: 10px;
            margin-bottom: 10px;
        }
        .card-text {
            margin-top: 20px;
            margin-bottom: 20px;
        }
        .form-check-input[type=radio] {
            margin-right: 10px;
        }
        .btn-primary {
            background-color: #007bff !important;
            border-color: #007bff !important;
        }
    </style>
</head>
<body>
    <div class="mx-0 mx-sm-auto">
      <div class="card">
        <div class="card-header">
          <h5 class="card-title mt-2">Nedamco Employees Feedback Request</h5>
        </div>
        <div class="card-body">
          <i class="far fa-file-alt fa-4x mb-3 text-primary"></i>
          <p class="card-cent"><strong>Your opinion matters</strong></p>
    <hr/>

          <form class="px-4" action="" method="POST">
            
            <!-- Additional questions -->
            
            
             <div class='mb-3'>
             <label for='name' class='form-label'><strong>Name:</strong> </label> <br>
                <textarea id='name' name='name' rows='1' cols='40' placeholder='your name'></textarea>
    
            </div>
             <!-- Question1 -->
             <div class='mb-3'>
                <label for='question1' class='form-label'><strong>What is your current level of familiarity with cloud computing?</strong></label><br>
                <input type='radio' id='beginner' name='question1' value='beginner'>
                <label for='beginner'>Beginner</label><br>
                <input type='radio' id='intermediate' name='question1' value='intermediate'>
                <label for='intermediate'>Intermediate</label><br>
                <input type='radio' id='expert' name='question1' value='expert'>
                <label for='expert'>Expert</label><br>
             </div>

             <!-- Question2 -->
             
             <div class='mb-3'>
                <label for='question2' class='form-label'><strong>What are the primary benefits of cloud computing for your organization?</strong></label><br>
                <textarea id='question2' name='question2' rows='2' cols='50' placeholder='Enter your answer here'></textarea>
             </div>

             <!-- Question3 -->
             
             <div class='mb-3'>
                <label for='question3' class='form-label'><strong>What are the primary challenges of cloud computing for your organization?</strong></label><br>
                <textarea id='question3' name='question3' rows='2' cols='50' placeholder='Enter your answer here'></textarea>
             </div>

             <!-- Question4 -->
             
             <div class='mb-3'>
                <label for='question4' class='form-label'><strong>What types of cloud services does your organization use or plan to use?</strong></label><br>
                <textarea id='question4' name='question4' rows='2' cols='50' placeholder='Enter your answer here'></textarea>
             </div>

             <!-- Question5 -->

             <div class='mb-3'>
                <label for='question4' class='form-label'><strong>What are the most important factors in selecting a cloud provider?</strong></label><br>
                <textarea id='question4' name='question4' rows='2' cols='50' placeholder='Enter your answer here'></textarea>
             </div>

             <!-- Question6 -->

             <div class='mb-3'>
                <label for='question4' class='form-label'><strong>What are the most important metrics for measuring the success of your cloud initiatives?</strong></label><br>
                <textarea id='question4' name='question4' rows='2' cols='50' placeholder='Enter your answer here'></textarea>
             </div>

             <div class='mb-3 form-check'>
                <input type='checkbox' id='anonymous' name='anonymous' value='anonymous'>
                <label for='anonymous' class='form-label'><strong>Submit feedback anonymously</strong></label>
             </div>

             <!-- Submit button -->
             <div class='card-cent'>
             <button type='submit' class='btn btn-primary'>Submit</button>
    </div>
          </form>

    </div>
    </body>
    </html>
             
             