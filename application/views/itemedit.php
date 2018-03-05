<h1>Task # {id}</h1>
<form role="form" action="/mtce/submit" method="post">
	<!-- Mildly editted placement so fields doesn't look as amateur -->
    {ftask}
    <br/>
    {fpriority}
    <br/>
    {fsize}
    <br/>
    {fgroup}
    <br/>
    {fstatus}
    <br/>
    {zsubmit}
</form>
    {error}
<a href="/mtce/cancel"><input type="button" value="Cancel the current edit"/></a>
<a href="/mtce/delete"><input type="button" value="Delete this todo item"/></a>