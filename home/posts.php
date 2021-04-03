<?php
   include('session.php');
   require('../connect.php');
   $query = "select id,userid,username,title,image_link,content,date from posts order by timestamp desc limit 10";
   if(isset($_GET['user'])){
        $uid = $_GET['user'];
        $query = "select id,userid,username,title,image_link,content,date from posts where userid='$uid' order by timestamp desc limit 10";
   }
   $result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <script src="../jquery/jquery3.2.1.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/posts.css">  
        <title>posts</title>
    </head>
    <body>
        <?php include('include/navbar.php'); ?>

        <div class="container"> 
            <div id="main-content">
                <?php while($post=mysqli_fetch_array($result)): ?>
                    <div class="card mx-auto">
                        <img class="card-img-top" src="<?php echo $post['image_link']; ?>" alt="content image">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $post['title']; ?></h5>
                            <p class="card-text"><?php echo $post['content']; ?></p>
                            <p class="card-text">
                                <small class="text-muted">
                                    Posted on <?php echo $post['date']; ?> by <b><a class="profile" href="profile.php?id=<?php echo $post['userid']; ?>"><?php echo $post['username']; ?></a></b></small></p>
                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#read_card-<?php echo $post['id']; ?>">Read Post</a>
                        </div>

                        <!-- Read card modal -->
                        <div class="modal fade" id="read_card-<?php echo $post['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel"><?php echo $post['title']; ?></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <img class="modal-body-image" src="<?php echo $post['image_link']; ?>" alt="content image">
                                        <div class="modal-body-content"><?php echo $post['content']; ?></div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>

            <div class="mx-auto">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Add Post</button>
                <button type="button" class="btn btn-dark" >Load More</button>
            </div>
        </div>

        <!-- Add post Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New Post</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="addpost.php">
                            <div class="form-group">
                                <label for="title" class="col-form-label">Title:</label>
                                <input type="text" class="form-control" id="title-name" name="title-name">
                            </div>
                            <div class="form-group">
                                <label for="image-link" class="col-form-label">Image link:</label>
                                <input type="text" class="form-control" id="image-link" name="image-link">
                            </div>
                            <div class="form-group">
                                <label for="content-text" class="col-form-label">Content:</label>
                                <textarea class="form-control" id="content-text" name="content-text"></textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php include('include/footer.php'); ?>
    </body>
</html>