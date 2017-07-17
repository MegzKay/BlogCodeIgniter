    </div>
   
<?php 
$url = $_SERVER['REQUEST_URI'];
if(strpos($url, 'posts/create') || strpos($url, 'posts/edit') || strpos($url, 'contact') )
{
    echo "<script>CKEDITOR.replace( 'editor1' );</script>";
}
?>    

</body>
</html>

