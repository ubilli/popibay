@section('sidebar')
<!DOCTYPE html>
<html lang="en">
  <head>
	
    <!-- dropzone css -->
    <link href="http://localhost:8000/pb-assets/css/dropzone.css">
	
	<body>
		
    <?php

      $product = Product::find(1);

      $product_images = $product->images()->get();

      foreach ($product_images as $product_image) {
        // var_dump($product_image);
      }
     ?>
	</body>
    <!-- dropzone js -->
    <script src="http://localhost:8000/pb-assets/js/dropzone.js"></script>
  </body>
</html>
@show