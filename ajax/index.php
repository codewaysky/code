<!DOCTYPE html>
<html>
    <head>
        <script src="clienthint.js"></script>
    </head>
    
    <body>
        <form>
            First Name:
            <input type="text" id="txt1" onkeyup="showHint(this.value)" />
        </form>
        <p>Suggestion: <span id="txtHint"></span></p>
    </body>
</html>
