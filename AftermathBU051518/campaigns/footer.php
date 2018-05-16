<script>
function docsOver(){
    document.getElementById("docs").src = "../img/buttons/docfolder_1.png";
}
function docsOut(){
    document.getElementById("docs").src = "../img/buttons/docfolder_0.png";
}
function conceptOver(){
    document.getElementById("art").src = "../img/buttons/concept_1.png";
}
function conceptOut(){
    document.getElementById("art").src = "../img/buttons/concept_0.png";
}
function faqOver(){
    document.getElementById("faq").src = "../img/buttons/faq_1.png";
}
function faqOut(){
    document.getElementById("faq").src = "../img/buttons/faq_0.png";
}
</script>

<div class="row metal">
    <div class="small-4 columns">
        <a href="../documents.php"><img src="../img/buttons/docfolder_0.png" id="docs" onmouseover="docsOver();" onmouseout="docsOut();" style="float: left;"></a>
    </div>

    <div class="small-4 columns">
        <a href="../art.php"><img src="../img/buttons/concept_0.png" id="art" onmouseover="conceptOver();" onmouseout="conceptOut();" style="margin: 0 auto;"></a>
    </div>

    <div class="small-4 columns">
        <a href="../faq.php"><img src="../img/buttons/faq_0.png" id="faq" onmouseover="faqOver();" onmouseout="faqOut();" style="float: right;"></a>
    </div>

</div>