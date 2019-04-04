<?php
require('header.php');

?>
</header>

<form class="contact-form" action="contact.incl.php" method="post">
    <input type="text" id="fnm" placeholder="First Name" required autocomplete="on">
    <input type="text" id="lnm" placeholder="Last Name" required autocomplete="on">
    <input type="text" id="eml" placeholder="Email" required autocomplete="on">
    <input type="text" id="phn" placeholder="555-555-5555" autocomplete="on">
    <textarea id="cmt" placeholder="Comment Here" required autocomplete="on" spellcheck></textarea>
    <input type="submit" id="ctc-submit" class="sbmt-bttn">
    <input type="reset" id="ctc-reset" class="rst-bttn">
</form>
<?php require('footer.php');
// require the page to use the footer


