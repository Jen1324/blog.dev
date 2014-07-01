<!doctype html>
<html lang="en">
<head>
    <title>Dice Roll</title>
</head>
<body>
    Here is your random number {{{ $random }}}!<br>
    Your guess was {{{ $guess }}}.<br>

    @if ($random == $guess)
    	<p style="color:green;">Your guess is correct!</p>
    @else
    	<p style="color:red;">Your guess is incorrect.</p>
    @endif
    	

</body>
</html>