<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <input type="file" name="" id="">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            // cach 1 lay theo input
            $('input[type="file"]').on('change', function(e) {
                var geekss = e.target.files[0].name;
                console.log(geekss);
                var path_deposit = geekss.split('.').pop();
                console.log(path_deposit);
            });

            // cach 2 lay theo id
            $('#exampleInputFile2').on('change', function(e) {
                var geekss = e.target.files[0].name;
                var path_deposit = geekss.split('.').pop();
                $input = $(this);
                if (path_deposit == 'pdf') {
                    document.getElementById('deposit-pdf').style.display = 'block';
                    document.getElementById('deposit').style.display = 'none';
                    if ($input.val().length > 0) {
                        fileReader = new FileReader();
                        fileReader.onload = function(data) {
                            $('.image-preview2-pdf').attr('src', data.target.result);
                        }
                        fileReader.readAsDataURL($input.prop('files')[0]);
                    }
                } else {
                    document.getElementById('deposit').style.display = 'block';
                    document.getElementById('deposit-pdf').style.display = 'none';
                    if ($input.val().length > 0) {
                        fileReader = new FileReader();
                        fileReader.onload = function(data) {
                            $('.image-preview2').attr('src', data.target.result);
                        }
                        fileReader.readAsDataURL($input.prop('files')[0]);
                    }
                }
            });
        })
    </script>
</body>

</html>