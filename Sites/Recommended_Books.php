<!doctype html>

<html lang="en-US">
    <title>Recommended Books</title>
    <meta charset="utf-8" width=device-width initial-scale=1.0>
    <head>
    <link href="../site.css" type="text/css" rel="stylesheet">
    </head>

    <body>
         <?php require '../side-menu.php';?>

        <div class="two">
        <h1>RECOMMENDED BOOKS</h1>
            <input type="text" id="myInput" placeholder="Search for past papers..">
            <p>The following are the books that have been suggested for use in schools. These books have been inspected and reviewed by credible Teachers and Practioners.</p>    
    
<!--A table showing the books recommended for each grade. Starting from grade 7 to grade 12 --><table>
            <tr> <th>Subject</th> <th>Year</th></tr>
            <td><?php include '../php/subject.php'?></td> 
            <td><?php include '../php/year.php' ?></td> 
            </table>        
        </div>
        
    </body>
</html>