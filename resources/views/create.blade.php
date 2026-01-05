<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Employee</title>

    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            margin: 0;
            height: 100vh;
            background: linear-gradient(135deg, #667eea, #764ba2);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-box {
            background: #ffffff;
            padding: 40px;
            border-radius: 10px;
            width: 100%;
            max-width: 420px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.2);
        }

        .form-box h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }

        .form-box input {
            width: 100%;
            padding: 12px 14px;
            margin-bottom: 15px;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 15px;
        }

        .form-box input:focus {
            outline: none;
            border-color: #667eea;
        }

        .form-box button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 6px;
            background: #667eea;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        .form-box button:hover {
            background: #5a67d8;
        }
    </style>
</head>
<body>

<div class="form-box">
    <h2>Create Employee</h2>

    <form method="POST" action="{{route('employee.store')}}">
        @csrf
        @method('post')
        <input type="text" required name="name" placeholder="Employee Name">
          <input type="text" required name="age" placeholder="Age">
           <input type="text" required name="position" placeholder="Position">
        <input type="email" required name="email" placeholder="Email Address">
        <input type="text" required name="salary" placeholder="Salary">

        <button type="submit">Create</button>
    </form>
</div>

</body>
</html>
