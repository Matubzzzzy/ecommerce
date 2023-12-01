<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>

@include('admin.css')


  </head>
  <body>

      <!-- partial -->
      @include('admin.navbar')
@include('admin.sidebar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
        <div class="container" align="center">
            <table>
                <tr>
                    <td>Title</td>
                    <td>Description</td>
                    <td>Quantity</td>
                    <td>Price</td>
                    <td>Image</td>



                </tr>


            </table>

        </div>
        </div>

        @include('admin.script')

  </body>
</html>
