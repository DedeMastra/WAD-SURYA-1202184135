@extends('layout/main')

@section('title', 'History')

@section('container')
<div class="container mt-5 w-75" style="background-color:white;">
    <h3 class="pb-3 pt-3 text-center"> History </h3>
    <div> 
        <table class="table" style="font-size: small;">
            <thead>
                <tr>
                    <th class="text-center" style="vertical-align:top;" scope="col">
                    <?php echo 'duuarr' ?> </th>
                    <th class="text-center" style="vertical-align:top;" scope="col">
                    <?php echo 'duuarr' ?> </th>
                    <th class="text-center" style="vertical-align:top;" scope="col">
                    <?php echo 'duuarr' ?> </th>
                    <th class="text-center" style="vertical-align:top;" scope="col" colspan="2">
                    Actions </th>
                </tr>
            </thead>
            <tbody class="font-weight-light">
                <?php  ?>
                    <tr>
                        <td class="text-center" style="vertical-align:top;" scope="col">
                        <?php echo 'duar' ?> </td>
                        <td class="text-center" style="vertical-align:top;" scope="col">
                        <?php echo 'duar' ?> </td>
                        <td class="text-center" style="vertical-align:top;" scope="col">
                        <?php echo 'duar' ?> </td>
                    </tr>
                <?php  ?>
            </tbody>
        </table>

        <div class="">
            <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#InsertModal">
                <a style="color:white" href="home.php">Order List</a>
            </button>
        </div> 
    </div>
</div>
@endsection
