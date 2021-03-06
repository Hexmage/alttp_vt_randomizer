@extends('layouts.default')

@section('content')
<h1>What are the different Variations?</h1>
<div class="well">
<p>Variations are new ways to play the game we already know and love.</p>

	<div class="panel panel-info">
		<div class="panel-heading">
			<h3 class="panel-title">Timed Race</h3>
		</div>
		<div class="panel-body">
			<p>In this mode the timer is counting up, and the person with the best time wins the game
				irrelevent of who beats Ganon first.</p>
			<p>Do you spend some time looking for a clock to adjust your timer down? Or just race
				to the end?</p>
			<p>This mode has:</p>
			<ul>
				<li>Start with 0 minutes on the timer</li>
				<li>20 Green clocks that subtract 4 minutes from your timer</li>
				<li>10 Blue clocks that subtract 2 minutes to your timer</li>
				<li>10 Red clocks that add 2 minutes to your timer</li>
			</ul>

		</div>
	</div>
	<div class="panel panel-warning">
		<div class="panel-heading">
			<h3 class="panel-title">Timed OHKO (one hit knock out)</h3>
		</div>
		<div class="panel-body">
			<p>In this mode you start with an amount of time on the timer, every clock you find will add time to
				your total time. But if you let the timer reach 0, then you'll be in OHKO mode.</p>
			<p>Don't despair though, if you are in OHKO mode and find another clock (no matter how
				long you have been in OHKO), you get the time of the clock added to your timer.</p>
			<table class="table table-responsive">
				<thead>
					<tr>
						<th>Difficulty</th>
						<th>Starting Time</th>
						<th>Green Clocks (+4 minutes)</th>
						<th>Red Clocks (insta-OHKO)</th>
					</tr>
				</thead>
				<tbody>
					<tr class="bg-info">
						<td>Easy</td>
						<td>20 minutes</td>
						<td>30</td>
						<td>0</td>
					</tr>
					<tr class="bg-success">
						<td>Normal</td>
						<td>10 minutes</td>
						<td>25</td>
						<td>0</td>
					</tr>
					<tr class="bg-warning">
						<td>Hard</td>
						<td>5 minutes</td>
						<td>20</td>
						<td>0</td>
					</tr>
					<tr class="bg-danger">
						<td>Expert</td>
						<td>5 minutes</td>
						<td>20</td>
						<td>5</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

	<div class="panel panel-danger">
		<div class="panel-heading">
			<h3 class="panel-title">OHKO (one hit knock out)</h3>
		</div>
		<div class="panel-body">
			<p>Same game as normal, but take any damage and Link is a goner.</p>
		</div>
	</div>

	<div class="panel panel-success">
		<div class="panel-heading">
			<h3 class="panel-title">Triforce Hunt</h3>
		</div>
		<div class="panel-body">
			<p>Ganon has broken up the triforce into a bunch of pieces, have fun finding them all. The game ends
				when you collect enough of them.</p>
			<table class="table table-responsive">
				<thead>
					<tr>
						<th>Difficulty</th>
						<th>Required</th>
						<th>Total</th>
					</tr>
				</thead>
				<tbody>
					<tr class="bg-info">
						<td>Easy</td>
						<td>10</td>
						<td>30</td>
					</tr>
					<tr class="bg-success">
						<td>Normal</td>
						<td>20</td>
						<td>30</td>
					</tr>
					<tr class="bg-warning">
						<td>Hard</td>
						<td>30</td>
						<td>40</td>
					</tr>
					<tr class="bg-danger">
						<td>Expert</td>
						<td>40</td>
						<td>40</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

	<div class="panel panel-info">
		<div class="panel-heading">
			<h3 class="panel-title">Key-sanity</h3>
		</div>
		<div class="panel-body">
			<p>Game not random enough for you? Looking for the real challenge?</p>
			<p>FINE!</p>
			<p>All Maps, Compasses, and Keys found in chests are no longer tied to their dungeons!</p>
			<p>You will have to search high and low to find the keys you need to progress in dungeons. Keys found on
				enemies or under pots will remain the same.</p>
			<p>Also we wanted to make Maps and Compasses worth more, so here it is: Your overworld map wont show any
				dungeon information until you collect the map for that dungeon (and if you thought the music would
				get you by, think again, that's been randomized). Compasses, well those will show you how many chests
				you have checked in a dungeon after you collect it.</p>
			<p>You're probably wondering how you know which Key/Map/Compass you found? We got you covered, there will
				be a text box that lets you know which dungeon it belongs to, but also the menu will have a table to
				help you if you don't like paying attention to those text boxes.</p>
		</div>
	</div>
</div>
@overwrite
