$(document).ready(function() {

///////////////////////////// Login User Event /////////////////////////////
    $(document).on('click', '#lgn', function(e) {
        e.preventDefault();
        let name = $('#username').val();
        let pass = $('#password').val();
        if(name.trim().length < 1 || pass.trim().length < 1) {
            $('#sub').text('خطای مقادیر');
            $('#txt').text('لطفا مقادیر مربوطه را وارد کنید');
            $('.panel').toggle('slide');
            if ($('.panel').attr('display') != 'none') {
                setTimeout(function() {
                    $('.panel').toggle('slide');
                }, 3000);
            }
        }
        else {
            let url = 'ajx.php';
            $.ajax({
                url: url,
                type: 'POST',
                dataType: 'json',
                data: {'action' : 1, 'name' : name, 'pass' : pass},
                success: function(data) {
                    console.log(data);
                    if (data == true) {
                        $('#sub').text('ورود موفق');
                        $('#txt').text('کاربر گرامی خوش آمدید');
                        $('.panel').toggle('slide');
                        if ($('.panel').attr('display') != 'none') {
                            setTimeout(function() {
                                $('.panel').toggle('slide');
                                $(location).attr('href', 'home');
                            }, 3000);
                        }
                    }else {
                        $('#sub').text('ورود ناموفق');
                        $('#txt').text('کاربری با این مشخصات یافت نشد');
                        $('.panel').toggle('slide');
                        if ($('.panel').attr('display') != 'none') {
                            setTimeout(function() {
                                $('.panel').toggle('slide');
                            }, 3000);
                        }
                    }
                },
                error: function(data) {
                    console.log(data);
                    $('#sub').text('ورود ناموفق');
                    $('#txt').text('خطا در برقراری ارتباط');
                    $('.panel').toggle('slide');
                    if ($('.panel').attr('display') != 'none') {
                        setTimeout(function() {
                            $('.panel').toggle('slide');
                        }, 3000);
                    }
                },
            });
        }
    });
///////////////////////////////////////////////////////////////////////////////////////

///////////////////////////// Forget Password Event /////////////////////////////
    $('#forget').click(function(e) {
        e.preventDefault();
        $('#lgn').attr('id', 'frgt');
        $('.user').hide();
        $('.pass').hide();
        $('aside > h3').hide();
        $(this).hide();
        $('.phone').show();
    });

    $(document).on('click', '#frgt', function(e) {
        e.preventDefault();
        let phone = $('#phone').val();
        if(phone.trim().length != 11) {
            $('#sub').text('خطای ورودی');
            $('#txt').text('لطفا شماره تلفن خود را به درستی وارد کنید');
            $('.panel').toggle('slide');
            if ($('.panel').attr('display') != 'none') {
                setTimeout(function() {
                    $('.panel').toggle('slide');
                }, 3000);
            }
        }
        else {
            let url = 'ajx.php';
            $.ajax({
                url: url,
                type: 'POST',
                dataType: 'json',
                data: {'action' : 2, 'phone' : phone},
                success: function(data) {
                    console.log(data);
                    if (data == true) {
                        $('#sub').text('ورود موفق');
                        $('#txt').text('کاربر گرامی خوش آمدید');
                        $('.panel').toggle('slide');
                        if ($('.panel').attr('display') != 'none') {
                            setTimeout(function() {
                                $('.panel').toggle('slide');
                                $(location).attr('href', 'home');
                            }, 3000);
                        }
                    }else {
                        $('#sub').text('ورود ناموفق');
                        $('#txt').text('کاربری با این مشخصات یافت نشد');
                        $('.panel').toggle('slide');
                        if ($('.panel').attr('display') != 'none') {
                            setTimeout(function() {
                                $('.panel').toggle('slide');
                            }, 3000);
                        }
                    }
                },
                error: function(data) {
                    console.log(data);
                    $('#sub').text('ورود ناموفق');
                    $('#txt').text('خطا در برقراری ارتباط');
                    $('.panel').toggle('slide');
                    if ($('.panel').attr('display') != 'none') {
                        setTimeout(function() {
                            $('.panel').toggle('slide');
                        }, 3000);
                    }
                },
            });
        }
    });
///////////////////////////////////////////////////////////////////////////////////////

///////////////////////////// Sign Up Event /////////////////////////////
    $('#sign').click(function(e) {
        e.preventDefault();
        $('#lgn').text('Sign Up');
        $('#lgn').attr('id', 'signup');
        $('.phone').show();
        $('#forget').hide();
        $(this).parents('h3').hide();
    });

    $(document).on('click', '#signup', function(e) {
        e.preventDefault();
        let name = $('#username').val();
        let pass = $('#password').val();
        let phone = $('#phone').val();
        if(name.trim().length < 1 || pass.trim().length < 1 || phone.trim().length != 11) {
            $('#sub').text('خطای مقادیر');
            $('#txt').text('لطفا مقادیر مربوطه را به صورت صحیح وارد کنید');
            $('.panel').toggle('slide');
            if ($('.panel').attr('display') != 'none') {
                setTimeout(function() {
                    $('.panel').toggle('slide');
                }, 3000);
            }
        }else {
            let url = 'ajx.php';
            $.ajax({
                url: url,
                type: 'POST',
                dataType: 'json',
                data: {'action' : 3, 'phone' : phone, 'pass' : pass, 'name' : name},
                success: function(data) {
                    console.log(data);
                    if (data == false) {
                        $('#sub').text('ثبت اطلاعات');
                        $('#txt').text('اطلاعات شما با موفقیت ذخیره گردید');
                        $('.panel').toggle('slide');
                        if ($('.panel').attr('display') != 'none') {
                            setTimeout(function() {
                                $('.panel').toggle('slide');
                                $(location).attr('href', 'home');
                            }, 3000);
                        }
                    }else {
                        $('#sub').text('خطا در ثبت اطلاعات');
                        $('#txt').text('کاربری با این نام یافت شد، لطفا از نام دیگری استفاده کنید');
                        $('.panel').toggle('slide');
                        if ($('.panel').attr('display') != 'none') {
                            setTimeout(function() {
                                $('.panel').toggle('slide');
                            }, 3000);
                        }
                    }
                },
                error: function(data) {
                    console.log(data);
                    $('#sub').text('ثبت ناموفق');
                    $('#txt').text('خطا در برقراری ارتباط');
                    $('.panel').toggle('slide');
                    if ($('.panel').attr('display') != 'none') {
                        setTimeout(function() {
                            $('.panel').toggle('slide');
                        }, 3000);
                    }
                },
            });
        }
    });
///////////////////////////////////////////////////////////////////////////////////////

///////////////////////////// Cancel Button Event /////////////////////////////
    $('#cnl').click(function(e) {
        if ($('.lgin').attr('id') == 'signup' || $('.lgin').attr('id') == 'frgt') {
            $(location).attr('href', '/');
        }
    });
///////////////////////////////////////////////////////////////////////////////////////
});
