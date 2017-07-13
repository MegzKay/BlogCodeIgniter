    </div>
   
<?php 
$url = $_SERVER['REQUEST_URI'];
if(strpos($url, 'posts/create') || strpos($url, 'posts/edit'))
{
    echo "<script>CKEDITOR.replace( 'editor1' );</script>";
}
?>    

</body>
</html>

