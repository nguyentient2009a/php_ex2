<!DOCTYPE html>
<html>
<style>
    input[type=text], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    div {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }
</style>
<body>

<h3>
    Register Form
</h3>

<div>
    <form action="/users/signup" method="post">
        @csrf
        <label for="fname">Fullname</label>
        <input type="text" id="fname" name="Fullname" placeholder="Your Full Name..">
        <label for="lname">Email</label>
        <input type="text" id="lname" name="Email" placeholder="Your last name..">
        <label for="lname">Phone</label>
        <input type="text" id="lname" name="Phone" placeholder="Your last name..">
        <label for="lname">Address</label>
        <input type="text" id="lname" name="Address" placeholder="Your last name..">
        <label for="lname">IdentityCard</label>
        <input type="text" id="lname" name="IdentityCard" placeholder="Your last name..">
        <input type="submit" value="Submit">
    </form>
</div>

</body>
</html>
