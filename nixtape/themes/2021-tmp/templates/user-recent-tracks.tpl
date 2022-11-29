{include file='header.tpl' subheader='user-header.tpl'}

{userscrobbles userid=$me->uniqueid limit=100}
<h3>Recent plays</h3>
{include file="tracklist.tpl" class=#table# items=$userscrobbles fimage=true fstream=true fartist=true flove=true ftime=true}


{include file='footer.tpl'}

