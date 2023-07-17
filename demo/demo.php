<?php include '__header.php'; ?>




	<h1>This is a small demo doc showing adaptation css make for WebPortal</h1>
	<p>For more documentioin see <a href="https://picocss.com/docs/containers.html" target="_blank">Pico doc</a></p>

	<aside>
		<nav class="closed-on-mobile">
			Table of contents
			<div class="spacer"></div>
			<details>
				<summary>Table</summary>
				<ul>
					<li><a href="#table-not-responsive" class="secondary">Not responsive table</a></li>
					<li><a href="#table-scroll-responsive"  class="secondary">Scroll responsive table</a></li>
					<li><a href="#table-collapse-responsive"  class="secondary">Collapse responsive table</a></li>
				</ul>
			</details>
			<details>
				<summary>Divers</summary>
				<ul>
					<li><a href="#ancor-spacer" id="containers-link" class="secondary">Spacer</a></li>
				</ul>
			</details>
		</nav>
	</aside>

	<h2>Tables</h2>

	<table role="grid" >
		<caption id="table-not-responsive">Not responsive list</caption>
		<thead>
		<tr>
			<th scope="col">consectetur</th>
			<th scope="col">Phasellus</th>
			<th scope="col">magnis</th>
			<th scope="col">amet</th>
		</tr>
		</thead>
		<tbody>
		<tr>
			<td data-label="Account">Lorem ipsum</td>
			<td data-label="Due Date">dolor sit amet</td>
			<td data-label="Amount">consectetur adipiscing</td>
			<td data-label="Period">Donec quis nisl orci</td>
		</tr>
		<tr>
			<td data-label="Account">Lorem ipsum</td>
			<td data-label="Due Date">dolor sit amet</td>
			<td data-label="Amount">consectetur adipiscing</td>
			<td data-label="Period">Donec quis nisl orci</td>
		</tr>
		<tr>
			<td data-label="Account">Lorem ipsum</td>
			<td data-label="Due Date">dolor sit amet</td>
			<td data-label="Amount">consectetur adipiscing</td>
			<td data-label="Period">Donec quis nisl orci</td>
		</tr>
		<tr>
			<td data-label="Account">Lorem ipsum</td>
			<td data-label="Due Date">dolor sit amet</td>
			<td data-label="Amount">consectetur adipiscing</td>
			<td data-label="Period">Donec quis nisl orci</td>
		</tr>
		<tr>
			<td data-label="Account">Lorem ipsum</td>
			<td data-label="Due Date">dolor sit amet</td>
			<td data-label="Amount">consectetur adipiscing</td>
			<td data-label="Period">Donec quis nisl orci</td>
		</tr>
		</tbody>
	</table>

	<hr class="spacer" />

	<table role="grid" responsive="scroll" >
		<caption  id="table-scroll-responsive" >Scroll responsive list</caption>
		<thead>
		<tr>
			<th scope="col">consectetur</th>
			<th scope="col">Phasellus</th>
			<th scope="col">magnis</th>
			<th scope="col">amet</th>
			<th scope="col">consectetur</th>
			<th scope="col">Phasellus</th>
			<th scope="col">magnis</th>
			<th scope="col">amet</th>
			<th scope="col">consectetur</th>
			<th scope="col">Phasellus</th>
			<th scope="col">magnis</th>
			<th scope="col">amet</th>
		</tr>
		</thead>
		<tbody>
		<tr>
			<td class="nowraponall" >Lorem ipsum</td>
			<td class="nowraponall" >dolor sit amet</td>
			<td class="nowraponall" >consectetur adipiscing</td>
			<td class="nowraponall" >Donec quis nisl orci</td>
			<td class="nowraponall" >Lorem ipsum</td>
			<td class="nowraponall" >dolor sit amet</td>
			<td class="nowraponall" >consectetur adipiscing</td>
			<td class="nowraponall" >Donec quis nisl orci</td>
			<td class="nowraponall" >Lorem ipsum</td>
			<td class="nowraponall" >dolor sit amet</td>
			<td class="nowraponall" >consectetur adipiscing</td>
			<td class="nowraponall" >Donec quis nisl orci</td>
		</tr>
		<tr>
			<td class="nowraponall" >Lorem ipsum</td>
			<td class="nowraponall" >dolor sit amet</td>
			<td class="nowraponall" >consectetur adipiscing</td>
			<td class="nowraponall" >Donec quis nisl orci</td>
			<td class="nowraponall" >Lorem ipsum</td>
			<td class="nowraponall" >dolor sit amet</td>
			<td class="nowraponall" >consectetur adipiscing</td>
			<td class="nowraponall" >Donec quis nisl orci</td>
			<td class="nowraponall" >Lorem ipsum</td>
			<td class="nowraponall" >dolor sit amet</td>
			<td class="nowraponall" >consectetur adipiscing</td>
			<td class="nowraponall" >Donec quis nisl orci</td>
		</tr>
		<tr>
			<td class="nowraponall" >Lorem ipsum</td>
			<td class="nowraponall" >dolor sit amet</td>
			<td class="nowraponall" >consectetur adipiscing</td>
			<td class="nowraponall" >Donec quis nisl orci</td>
			<td class="nowraponall" >Lorem ipsum</td>
			<td class="nowraponall" >dolor sit amet</td>
			<td class="nowraponall" >consectetur adipiscing</td>
			<td class="nowraponall" >Donec quis nisl orci</td>
			<td class="nowraponall" >Lorem ipsum</td>
			<td class="nowraponall" >dolor sit amet</td>
			<td class="nowraponall" >consectetur adipiscing</td>
			<td class="nowraponall" >Donec quis nisl orci</td>
		</tr>

		</tbody>
	</table>



	<hr class="spacer" />

	<table role="grid" responsive="collapse" >
		<caption id="table-collapse-responsive">
			Collapse responsive list<br/>
			<small>This responsive liste use same behavior of Scroll responsive list but, when the browser width drops below 600px wide, the table collapse to display a mobile compatible table.</small>
		</caption>
		<thead>
		<tr>
			<th scope="col">consectetur</th>
			<th scope="col">Phasellus</th>
			<th scope="col">magnis</th>
			<th scope="col">amet</th>
			<th scope="col">consectetur</th>
			<th scope="col">Phasellus</th>
			<th scope="col">magnis</th>
			<th scope="col">amet</th>
			<th scope="col">consectetur</th>
			<th scope="col">Phasellus</th>
			<th scope="col">magnis</th>
			<th scope="col">amet</th>
		</tr>
		</thead>
		<tbody>
		<tr>
			<td class="nowraponall" data-label="Account">Lorem ipsum</td>
			<td class="nowraponall" data-label="Due Date">dolor sit amet</td>
			<td class="nowraponall" data-label="Amount">consectetur adipiscing</td>
			<td class="nowraponall" data-label="Period">Donec quis nisl orci</td>
			<td class="nowraponall" data-label="Account">Lorem ipsum</td>
			<td class="nowraponall" data-label="Due Date">dolor sit amet</td>
			<td class="nowraponall" data-label="Amount">consectetur adipiscing</td>
			<td class="nowraponall" data-label="Period">Donec quis nisl orci</td>
			<td class="nowraponall" data-label="Account">Lorem ipsum</td>
			<td class="nowraponall" data-label="Due Date">dolor sit amet</td>
			<td class="nowraponall" data-label="Amount">consectetur adipiscing</td>
			<td class="nowraponall" data-label="Period">Donec quis nisl orci</td>
		</tr>
		<tr>
			<td class="nowraponall" data-label="Account">Lorem ipsum</td>
			<td class="nowraponall" data-label="Due Date">dolor sit amet</td>
			<td class="nowraponall" data-label="Amount">consectetur adipiscing</td>
			<td class="nowraponall" data-label="Period">Donec quis nisl orci</td>
			<td class="nowraponall" data-label="Account">Lorem ipsum</td>
			<td class="nowraponall" data-label="Due Date">dolor sit amet</td>
			<td class="nowraponall" data-label="Amount">consectetur adipiscing</td>
			<td class="nowraponall" data-label="Period">Donec quis nisl orci</td>
			<td class="nowraponall" data-label="Account">Lorem ipsum</td>
			<td class="nowraponall" data-label="Due Date">dolor sit amet</td>
			<td class="nowraponall" data-label="Amount">consectetur adipiscing</td>
			<td class="nowraponall" data-label="Period">Donec quis nisl orci</td>
		</tr>
		<tr>
			<td class="nowraponall" data-label="Account">Lorem ipsum</td>
			<td class="nowraponall" data-label="Due Date">dolor sit amet</td>
			<td class="nowraponall" data-label="Amount">consectetur adipiscing</td>
			<td class="nowraponall" data-label="Period">Donec quis nisl orci</td>
			<td class="nowraponall" data-label="Account">Lorem ipsum</td>
			<td class="nowraponall" data-label="Due Date">dolor sit amet</td>
			<td class="nowraponall" data-label="Amount">consectetur adipiscing</td>
			<td class="nowraponall" data-label="Period">Donec quis nisl orci</td>
			<td class="nowraponall" data-label="Account">Lorem ipsum</td>
			<td class="nowraponall" data-label="Due Date">dolor sit amet</td>
			<td class="nowraponall" data-label="Amount">consectetur adipiscing</td>
			<td class="nowraponall" data-label="Period">Donec quis nisl orci</td>
		</tr>
		</tbody>
	</table>



	<div class="spacer"></div>

	<h2 id="ancor-spacer">Spacer</h2>
	<p>Will create separation space</p>
	<pre><code>&lt;<b>div</b> class=&quot;<b>spacer</b>&quot;&gt;&lt;/<b>div</b>&gt;</code></pre>

<?php include '__footer.php'; ?>