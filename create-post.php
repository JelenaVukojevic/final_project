<?php
 
    $servername = "127.0.0.1";
    $username = "root";
    $password = "vivify";
    $dbname = "blog";

    try {
        $connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Vivify Blog - create post</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

	<link href="styles/blog.css" rel="stylesheet">
	<link href="styles/styles.css" rel="stylesheet">
</head>
<body>
	<?php include('header.php') ?>

<main role="main" class="container">

    <div class="row">

        <div class="col-sm-8 blog-main">

            <div class="blog-post">
                <h2>Add new post</h2>
                <div class="hidden"><p class="alert alert-danger">Please fill in all fields.</p></div>
                <form method="post" action="new-post.php">
                    <label for="title">Post title</label>
                    <input type="text" name="title" placeholder="Place your title here" >
                    <label for="post">Post content</label>
                    <textarea name="text" rows="15" placeholder="Type your content..." ></textarea>
                    <input type="submit" value="Add post">    
                </form>
                
            </div>

        </div>

        <?php include('sidebar.php') ?>

    </div>

</main>

<?php include('footer.php') ?>
<script type="text/javascript" src="show-hide-comments.js"></script>
</body>
</html>