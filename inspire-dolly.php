<?php

/*
Plugin Name: Inspire Dolly
Version: 1.0.2
Description: Based on Matt Mullenweg's Hello Dolly Plugin.When enabled, on every page of the admin area you will see a random quote inspiring you to be a fearless writer. 
Author: Kumar Abhisek
Author URI: http://increasy.com/
Plugin URI: http://increasy.com/
License: GPLv2

 Copyright 2014 Kumar Abhisek (email:meabhi[at]outlook dot com)
 
 This program is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License version 2,
 as published by the Free Software Foundation.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.See the
 GNU General Public License for more details.
 
 The license for this software can likely be found here:
 http://www.gnu.org/licenses/gpl-2.0.html

*/

$inspire=  array();

$inspire[0]="To live a creative life we must first lose the fear of being wrong.";
$inspire[1]="Keep on beginning and failing. Each time you fail, start all over again, and you will grow stronger.";
$inspire[2]="You get ideas from daydreaming. You get ideas from being bored. You get ideas all the time. The only difference between writers and other people is we notice when we’re doing it.";
$inspire[3]="The role of a writer is not to say what we all can say, but what we are unable to say.";
$inspire[4]="There is nothing to writing. All you do is sit down at a typewriter and bleed.";
$inspire[5]="Writing is like sex; you don’t have to wait until you’re an expert to begin doing it.";
$inspire[5]="If I waited for perfection I would never write a word.";
$inspire[6]="Almost all good writing begins with terrible first efforts.You need to start somewhere.";
$inspire[7]="A professional writer is an amateur who didn’t quit.";
$inspire[8]="The one ironclad rule is that I have to try.I have to walk into my writing room and pick up my pen every weekday morning.";
$inspire[9]="Planning to write is not writing.Outlining, researching, talking to people about what you’re doing, none of that is writing.Writing is writing.";
$inspire[10]="If you wait for inspiration to write; you’re not a writer, you’re a waiter.";
$inspire[11]="I write when I’m inspired, and I see to it that I’m inspired at nine o’clock every morning.";
$inspire[12]="Good writing is supposed to evoke sensation in the reader—not the fact that it is raining, but the feeling of being rained upon.";
$inspire[13]="Write with the complete palette of emotions.";
$inspire[14]="Write your first draft with your heart.Rewrite with your head.";
$inspire[15]="Fill your paper with the breathings of your heart.";
$inspire[16]="You can’t think yourself out of a writing block; you have to write yourself out of a thinking block." ;
$inspire[17]="I write for the same reason I breathe-because if I didn’t, I would die." ;
$inspire[18]="Write what you know. Write what you want to know more about. Write what you’re afraid to write about." ;
$inspire[19]="The books that the world calls immoral are the books that show the world it's own shame." ;
$inspire[20]="Inspiration is wonderful when it happens, but the writer must develop an approach for the rest of the time." ;
$inspire[21]="There are three rules for writing.Unfortunately, no one knows what they are." ;
$inspire[22]="The scariest moment is always just before you start." ;
$inspire[23]="Creativity takes courage." ;
$inspire[24]="If you want to be a writer — stop talking about it and sit down and write!" ;
$inspire[25]="The two most engaging powers of an author are to make new things familiar, familiar things new." ;
$inspire[26]="If my doctor told me I had only six minutes to live, I wouldn’t brood. I’d type a little faster." ;
$inspire[27]="When asked, ‘How do you write?’ I invariably answer, ‘one word ata time." ;
$inspire[28]="Imagination is more important than knowledge. Knowledge is limited. Imagination encircles the world." ;
$inspire[29]="You are a genius, all of the time." ;
$inspire[30]="You never have to change anything you got up in the middle of the night to write." ;
$inspire[31]="Passion is king! Only when you breathe it in, can the transformation begin." ;
$inspire[32]="Problems are only opportunities in work clothes." ;
$inspire[33]="If life gives you lemons, make lemonade." ;
$inspire[34]="I write one page of masterpiece to ninety-one pages of shit." ;
$inspire[35]="Fail Forward, Not Backwards." ;
$inspire[36]="A real book is not one that’s read, but one that reads us." ;
$inspire[37]="Being a good writer is 3% talent, 97% not being distracted by the Internet." ;
$inspire[38]="It is by sitting down to write every morning that one becomes a writer." ;
$inspire[39]="Most of the basic material a writer works with is acquired before the age of fifteen." ;
$inspire[40]="The original writer is not one who imitates nobody, but one whom nobody can imitate." ;
$inspire[41]="To survive, you must tell stories." ;
$inspire[42]="The Six Golden Rules of Writing: Read, read, read, and write, write, write." ;
$inspire[43]="To write with style, we need at times to break the rules." ;
$inspire[44]="Only the poet can look beyond the detail and see the whole picture." ;
$inspire[45]="If I had to give young writers advice, I would say don’t listen to writers talking about writing or themselves." ;
$inspire[46]="Serious writers write, inspired or not. Over time they discover that routine is a better friend than inspiration." ;
$inspire[47]="If it sounds like writing, I rewrite it." ;
$inspire[48]="The secret of good writing is telling the truth." ;
$inspire[49]="It is better to write a bad first draft than to write no first draft at all." ;
$inspire[50]="To gain your own voice, you have to forget about having it heard." ;
$inspire[51]="Stop wishing, start doing." ;
$inspire[52]="Love your whole story even if it hasn't been the perfect fairy tale." ;
$inspire[53]="In the heart of every struggle lies an opportunity to grow." ;
$inspire[54]="There are no limits or boundaries to what you can do, listen to the guidance of your inner-voice." ;
$inspire[55]="The first draft of anything is shit." ;
$inspire[56]="Too many of us are not living our dreams because we are living our fears." ;
$inspire[57]="Everybody walks past a thousand story ideas every day. The good writers are the ones who see five or six of them. Most people don’t see any." ;
$inspire[58]="You don’t have to say everything to say something." ;
$inspire[59]="We are all apprentices in a craft where no one ever becomes a master." ;
$inspire[60]="If the writing is honest it cannot be separated from the man who wrote it." ;

$chosen = wptexturize($inspire[ mt_rand(0, count($inspire)-1)]);

// This just echoes the chosen line, we'll position it later

function Inspire_Dolly() {
	global $chosen;
	echo "<p id='inspireme'>$chosen</p>";
}

// Now we set that function up to execute when the admin_footer action is called
add_action('admin_notices', 'Inspire_Dolly');

// We need some CSS to position the paragraph
function Inspire_Dolly_CSS() {
	echo "
<style type='text/css'>
#inspireme {
margin-top: 1px;
margin-bottom: 20px;
margin-right: 20px;
padding: 4px;
font-size: 13px;
font-weight: bold;
color: #777;
background-color: #FFF;
border: 1px solid #ddd;
border-top: 0;
}
</style>
	";
}

add_action('admin_head', 'Inspire_Dolly_CSS');
?>