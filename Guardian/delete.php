<?php
// connect to the database
$db = new PDO("mysql:host=localhost;dbname=tuitionplatform", "root");

// get the content id from the form
if (isset($_POST['delete']) && isset($_POST['content_id'])) {
  $content_id = $_POST['content_id'];

  // delete the content from the database
  $sql = "DELETE FROM `post` WHERE id = :content_id";
  $stmt = $db->prepare($sql);
  $stmt->bindParam(':content_id', $content_id, PDO::PARAM_INT);
  $result = $stmt->execute();

  // check if the deletion was successful or not
  if ($result) {
    echo "The content was deleted successfully.";
  } else {
    echo "There was an error deleting the content.";
  }
}

header("Location: g-job-board.php"); // redirect to index.php
exit();
?>
