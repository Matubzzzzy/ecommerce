<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>

@include('admin.css')

<style type="text/css">

    .title
    {
        color:white; 
        padding-top: 25px; 
        font-size: 25px;
    }
</style>

  </head>
  <body>

      <!-- partial -->
@include('admin.sidebar')
@include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="container" align="center">
        <h1 class="title">Add Product</h1>
        <form>

        <div style="padding:15px;"> 
            <label>Product Title</label>

            <input type="text" name="title" placeholder="The Product Title" required="">
        </div>

        <div style="padding:15px;"> 
            <label>Price</label>

            <input type="text" name="price" placeholder="The Price" required="">
        </div>
        
        <div style="padding:15px;"> 
            <label>Description</label>

            <input type="text" name="description" placeholder="The Description" required="">
        </div>
        
        <div style="padding:15px;"> 
            <label>Quantity</label>

            <input type="text" name="quantity" placeholder="The Product Title" required="">
        </div>
        
        <div style="padding:15px;">   
            <input type="file" name="file" required="">
        </div>

        <div style="padding:15px;"> 
            <input type="submit">
        </div>
        
        </form>
        
        </div>

        



    </div>
          <!-- partial -->
        @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
