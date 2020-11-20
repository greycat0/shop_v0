function change(count1)
{
    document.getElementById("t").innerHTML = count1;
}
function inc()
{
    if (count < 999)
    {
        count++;
    }
    change(count);
}
function dec()
{
    if (count > 1)
    {
        count--;
    }
    change(count);
}