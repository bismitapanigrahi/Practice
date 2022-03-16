<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Requestee</title>
    <link rel="stylesheet" href="http://localhost:8080/practice/programs_prac/Members_using_oop/styles/displayStyle.css">
</head>
<body>
    <h2>All Members: </h2>
    <div id=members>
        <ul>
            <li><button><a href="create.php">Create a Member</a></button></li>
            <Li><button><a href="approved.php">Approved Members</a></button></Li>
            <li><button><a href="declined.php">Declined Members</a></button></li>
        </ul>
    </div>
    <div id="note">
        <ul class="member_note">
            <li>*<u>Note</u>: Selection Process: </li>
            <li>1. Male Member age should be between 22 and 38</li>
            <li>2. Female Member age should be between 26 and 34</li>
        </ul>
    </div> 
    <br>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Date of Birth</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Action</th>
        </tr>
        <?php 
            include '../actions/display.php'; 
            $db=new displayRecord();
            $db->display();
        ?>
    </table>
    
    <script>
        function confirmApprove() {
            return confirm("Are you sure you want to Approve this member?");
        }
        function confirmDecline() {
            return confirm("Are you sure you want to Decline this member?");
        }
    </script>
</body>
</html>