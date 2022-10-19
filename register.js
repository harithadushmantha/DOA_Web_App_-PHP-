function getSelectedValue()
{
    var test = document.getElementById("user-type").value;

    if(test == "field-officer")
    {
        document.getElementById("officer-id").style.visibility='visible';
    }
    else
    {
        document.getElementById("officer-id").style.visibility='hidden';
    }
    if(test == "farmer")
    {
        document.getElementById("farmer-dist").style.visibility='visible';
    }
    else
    {
        document.getElementById("farmer-dist").style.visibility='hidden';
    }
}

