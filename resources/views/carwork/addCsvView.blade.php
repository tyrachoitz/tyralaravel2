<!DOCTYPE html>
<html>
<header>
<style>
body {
  background-color: lightblue;
}


</style>
<title></title>
</header>    

<body>
<form method="post" action="{{ route('carwork.add.csv')}}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group" align="center">
                            <label for="file"><h1>csv</h1></label><br><br>
                            <input type="file" class="form-control{{ $errors->has('file') ? ' border-danger' : '' }}"
                                id="file" name="file" value="">
                            <small class="form-text text-danger">{!! $errors->first('file') !!}</small>
                        </div>
                        <div class="text-center" align="center"><br>
                            <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                        </div>
                    </form>

</body>

</html>

<!--ni mcm form utk masukkn csv file-->