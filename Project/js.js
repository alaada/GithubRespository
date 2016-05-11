/**
 * Created by user on 05.05.2016.
 */
<script type="application/javascript">
    $q('.login').click(function() {
        $q('#signUpDialog').hide();
        $q('#loginDialog').show();
    })
$q('#loginDialog').click(function(){
    $q('#loginDialog').hide();
})
$q('.closeButton').click(function(){
    $q('#loginDialog').hide();
    $q('#signUpDialog').hide();
})
$q('.loginDialogBox').click(function(event){
    event.stopPropagation();
})
$q('.signUpDialogBox').click(function(event){
    event.stopPropagation();
})

$q('#signUpDialog').click(function(){
    $q('#signUpDialog').hide();
})

$q('.signup').click(function() {
    $q.getScript( "https://www.google.com/recaptcha/api.js", function( data, textStatus, jqxhr ) {
    });

    $q('#loginDialog').hide();
    $q('#signUpDialog').show();
})
