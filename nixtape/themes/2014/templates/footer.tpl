					</section>
				</div>
			</article>
		{if $nosidebar != true}
		{include file="sidebar.tpl" player=$sideplayer}
		{/if}
	</div>

</div>
</div>
<div id="footer">

     <div class="container margin-top">
		{include file='language-selector.tpl'}<br />

	<p class="text-muted">{t site=$site_name escape=no}%1 is powered by the <a href="http://www.gnu.org/software/fm">GNU FM</a> <a href="https://www.gnu.org/philosophy/free-sw.html">free software</a> system &mdash; <a href="https://git.gnu.io/gnu/gnu-fm">take it</a>, run your own site and <a href="https://gnu.io/fm/developers/">join the development community!{/t}</a>.</p>

     </div>

     <div id="bigv">

     <p class="text-center"><a href="http://bigv.io"><img src="{$base_url}/themes/2014/img/bigv.png" /></a></p>

     <p class="text-center text-muted">Libre.fm is supported by <a href="http://bytemark.co.uk">Bytemark</a>, <a href="http://bigv.io">BigV</a>, <a href="http://archive.org">The Internet Archive</a> and <a href="http://isc.org">ISC</a></p>

<p class="text-center text-muted"><small>For help regarding removal of accounts, data export and more please contact <a href="http://mat.tl">Matt Lee</a>.</small></p>

     <hr />

     <div style="height: 10px; background: purple;">&nbsp;</div>

     </div>

</div>
</body>
</html>
