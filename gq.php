<!DOCTYPE html>
<html>
<head>
	<title> GRAMMAIRE</title>
	<?php
	session_start();
//$base='uti';
//$serveur='localhost';
//$user='root';
//$password='';
$row= $_SESSION['row'];
//$con=mysqli_connect("$serveur","$user","$password","$base") or die("Could not connect to the database");
//if (!$con)
	//{header('Location: index.html');die;}
//$sql = "SELECT * FROM utilisateur where mail=".'"'."$a".'"';
//$result = mysqli_query($con,$sql) or die("Could not connect to the database");
//$row = mysqli_fetch_array($result);
switch ($row[2]) {
	case '1':
		switch ($row[4]) {
			case '0':
				$q="She prides on her beauty.";
				$r="She prides herself on her beauty.";
				break;
			case '1':
				$q="Students should avail of good opportunity.";
				$r="Students should avail themselves of good.";
				break;
			case '2':
				$q="We enjoyed at the party.";
				$r="We enjoyed ourselves at the party.";
				break;			
			case '3':
				$q="There is nothing such as luck.";
				$r="There is no such thing as luck";
				break;
			case '4':
				$q="Tell me how are you.";
				$r="Tell me how you are.";
				break;
			case '5':
				$q="He jumped a ten feet wide ditch.";
				$r="He jumped a ditch ten feet wide.";
				break;
			case '6':
				$q="What for has he come?";
				$r="What has he come for?";
				break;
			case '7':
				$q="This will not only interest children, but also good men.";
				$r="This will interest not only children but also good men.";
				break;
			case '8':
				$q="I neither know the name of the author, nor the bookseller.";
				$r="I know the name of neither the author nor the bookseller.";
				break;
			case '9':
				$q="He was either educated at Bombay or at Madras.";
				$r="He was educated either in Bombay or in Madras.";
				break;
			case '10':
				$q="Walking is good both for health and recreation.";
				$r="Walking is good for both health and recreation.";
				break;
			case '11':
				$q="The milk of a cow is too nutritious.";
				$r="The milk of a cow is very nutritious.";
				break;
			case '12':
				$q="Mohan lived in a boarding.";
				$r="Mohan lived in a boarding house.";
				break;
			case '13':
				$q="He has taken admission in a law college.";
				$r="He has been admitted to a law college.";
				break;
			case '14':
				$q="He feels very weak to walk.";
				$r="He feels too weak to walk.";
				break;
			case '15':
				$q="The tide was so strong that the rope was torn.";
				$r="The tide was so strong that the rope broke.";
				break;
			case '16':
				$q="The boat was drowned.";
				$r="The boat sank.";
				break;
			case '17':
				$q="Do it or you will be beaten.";
				$r="Do it or you shall be beaten.";
				break;
			case '18':
				$q="If they make noise, they will be fined.";
				$r="If they make a noise they shall be fined.";
				break;
			case '19':
				$q="He is suffering from a strong cold.";
				$r="He is suffering from a bad cold.";
				break;
			case '20':
				$q="Cattle is grazing in the field.";
				$r="Cattle are grazing in the field.";
				break;
			case '21':
				$q="The gentry of this town does not like it.";
				$r="The gentry of this town do not like it.";
				break;
			case '22':
				$q="The police has arrested him.";
				$r="The police have arrested him.";
				break;
			case '23':
				$q="I shall go to my quarter.";
				$r="I shall go to my quarters.";
				break;
			case '24':
				$q="I have four son-in-laws.";
				$r="I have four sons-in-law.";
				break;
			case '25':
				header('Location: profile.php');die;
				break;}
		break;
	case '2':
		switch ($row[4]) {
			case '0':
				$q="My house is built of bricks.";
				$r="My house is built of brick.";
				break;
			case '1':
				$q="He is true to his words.";
				$r="He is true to his word.";
				break;
			case '2':
				$q="I have three pairs of shoes.";
				$r="I have three pairs of shoe.";
				break;			
			case '3':
				$q="He did three-fourth of the work.";
				$r="He did three-fourths of the work.";
				break;
			case '4':
				$q="He had to do several works.";
				$r="He had to do several pieces of work.";
				break;
			case '5':
				$q="Let he and I do it together.";
				$r="Let him and me do it together.";
				break;
			case '6':
				$q="They are all there but I.";
				$r="They are all there but me.";
				break;
			case '7':
				$q="Who do you take me for?";
				$r="Whom do you take me for?";
				break;
			case '8':
				$q="I would not do that if I were him.";
				$r="I would not do that if I were he.";
				break;
			case '9':
				$q="He answered more questions than me.";
				$r="He answered more questions than I.";
				break;
			case '10':
				$q="They are wiser than us.";
				$r="They are wiser than we.";
				break;
			case '11':
				$q="We are poorer than them.";
				$r="We are poorer than they.";
				break;
			case '12':
				$q="One should respect his teacher.";
				$r="One should respect one’s teacher.";
				break;
			case '13':
				$q="One does not like to have his work doubted.";
				$r="One does not like to have one’s word doubted.";
				break;
			case '14':
				$q="One must not boast of his own success.";
				$r="One must not boast of one’s own success.";
				break;
			case '15':
				$q="Everyone should respect one’s teacher.";
				$r="Everyone should respect his teacher.";
				break;
			case '16':
				$q="Anyone can do this if one tries.";
				$r="Anyone can do this if he tries.";
				break;
			case '17':
				$q="Everybody wants to have their full pay.";
				$r="Everybody wants to have his full pay.";
				break;
			case '18':
				$q="Whom do you think he is?";
				$r="Who do you think he is?";
				break;
			case '19':
				$q="Who did you see?";
				$r="Whom did you see?";
				break;
			case '20':
				$q="He was the man whom I thought was very poor.";
				$r="He was the man who I thought was very poor.";
				break;
			case '21':
				$q="This is one of the interesting stories that has been told by Tolstoy.";
				$r="This is one of the interesting stories that have been told by Tolstoy.";
				break;
			case '22':
				$q="This is one of the best buildings that has come into my view.";
				$r="This is one of the best buildings that have come into my view.";
				break;
			case '23':
				$q="It is I who is to blame.";
				$r="It is I who am to blame.";
				break;
			case '24':
				$q="This is the man who was there and no one saw.";
				$r="This is the man who was there and whom no one saw.";
				break;
			case '25':
				header('Location: profile.php');die;
				break;}
		break;
	case '3':
		switch ($row[4]) {
			case '0':
				$q="This is the book which was there and none knew.";
				$r="This is the book which was there and which none knew.";
				break;
			case '1':
				$q="I want your reply.";
				$r="I want a reply from you.";
				break;
			case '2':
				$q="I availed of the opportunity.";
				$r="I availed myself of the opportunity.";
				break;			
			case '3':
				$q="The absented for that day.";
				$r="They absented themselves for that day.";
				break;
			case '4':
				$q="Any of the two men can do it.";
				$r="Either of the two men can do it.";
				break;
			case '5':
				$q="None of the two boys were present.";
				$r="Neither of the two boys was present.";
				break;
			case '6':
				$q="This is the best which we can do.";
				$r="This is the best that we can do.";
				break;
			case '7':
				$q="I, he and you will play.";
				$r="You, he and I will play.";
				break;
			case '8':
				$q="Indore of today is the most populous town of M.P.";
				$r="The Indore of today is the most populous town of M.P.";
				break;
			case '9':
				$q="Ganga is our sacred river.";
				$r="The Ganga is our sacred river.";
				break;
			case '10':
				$q="He begins work at daybreak and leaves off at the sunset.";
				$r="He begins work at daybreak and leaves off at sunset.";
				break;
			case '11':
				$q="Rose is a red flower.";
				$r="The rose is a red flower.";
				break;
			case '12':
				$q="Sun rises by 6 a.m. these days.";
				$r="The Sun rises by 6 a.m. these days.";
				break;
			case '13':
				$q="Do not pull the cat by its tail.";
				$r="Do not pull the cat by the tail.";
				break;
			case '14':
				$q="He is the principal of this college.";
				$r="He is Principal of this college.";
				break;
			case '15':
				$q="Principal of this college is coming.";
				$r="The Principal of this college is coming.";
				break;
			case '16':
				$q="This is no time to sing.";
				$r="This is not the time to sing.";
				break;
			case '17':
				$q="No boy in the class is so good as Raman.";
				$r="No other boy in the class is as good as Raman.";
				break;
			case '18':
				$q="He is older than anybody in the village.";
				$r="He is older than anybody else in the village.";
				break;
			case '19':
				$q="He is elder than his sister.";
				$r="He is older than his sister.";
				break;
			case '20':
				$q="There were no less than a hundred men.";
				$r="There were not fewer than a hundred men.";
				break;
			case '21':
				$q="He dare me to fight with him.";
				$r="He dares me to fight with him.";
				break;
			case '22':
				$q="He dare leave the room.";
				$r="He dares to leave the room.";
				break;
			case '23':
				$q="He dare say so.";
				$r="He dares to say so.";
				break;
			case '24':
				$q="Forgave him for his fault.";
				$r="I forgave him his fault.";
				break;
			case '25':
				header('Location: profile.php');die;
				break;}
		break;
	case '4':
		switch ($row[4]) {
			case '0':
				$q="We envy him for his good luck.";
				$r="We envy him his good luck.";
				break;
			case '1':
				$q="He left for them all his wealth.";
				$r="He left them all his wealth.";
				break;
			case '2':
				$q="This man bears me with a grudge.";
				$r="This man bears me a grudge.";
				break;			
			case '3':
				$q="I advice you to wait.";
				$r="I advise you to wait.";
				break;
			case '4':
				$q="This book proved to be of no use.";
				$r="This book proved of no use.";
				break;
			case '5':
				$q="He said me good morning.";
				$r="He bade me good morning.";
				break;
			case '6':
				$q="You have rather played than worked.";
				$r="You had rather play than work.";
				break;
			case '7':
				$q="The ship drowned in the sea.";
				$r="The ship was sunk in the sea.";
				break;
			case '8':
				$q="The boy sank in the river.";
				$r="The boy drowned in the river.";
				break;
			case '9':
				$q="I am here since 1981.";
				$r="I have been here since 1981.";
				break;
			case '10':
				$q="I shall reach there by this time tomorrow.";
				$r="I shall have reached there by this time tomorrow.";
				break;
			case '11':
				$q="Do you remember to see me?";
				$r="Do you remember to have seen me?";
				break;
			case '12':
				$q="I will be reading for two years more.";
				$r="I will have been reading for two years more.";
				break;
			case '13':
				$q="It’s high time (that) you go home.";
				$r="It’s high time (that) you went home.";
				break;
			case '14':
				$q="We rejoiced at him being promoted.";
				$r="We rejoiced at his being promoted.";
				break;
			case '15':
				$q="I have no faith in him keeping his promise.";
				$r="I have no faith in his keeping his promise.";
				break;
			case '16':
				$q="I was very surprised at hearing this news.";
				$r="I was much surprised at hearing this news.";
				break;
			case '17':
				$q="The air is very hotter today than yesterday.";
				$r="The air is much hotter today than it was yesterday.";
				break;
			case '18':
				$q="This news is much surprising.";
				$r="This news is very surprising.";
				break;
			case '19':
				$q="He is comparatively better today.";
				$r="He is comparatively well today.";
				break;
			case '20':
				$q="This house is comparatively cheaper.";
				$r="This house is comparatively cheap.";
				break;
			case '21':
				$q="He goes to the cinema off and on.";
				$r="He goes to the cinema now and then.";
				break;
			case '22':
				$q="I shall, of course, come here tomorrow.";
				$r="I shall certainly come here tomorrow.";
				break;
			case '23':
				$q="Is the whole always greater than the part?  Certainly, it is.";
				$r="Is the whole – part? Of course, it is.";
				break;
			case '24':
				$q="He lost his son and certainly he felt much grieved.";
				$r="He lost his son and, of course, he felt much grieved.";
				break;
			case '25':
				header('Location: profile.php');die;
				break;}
		break;
	case '5':
		switch ($row[4]) {
			case '0':
				$q="He sought for his missing friend far and away.";
				$r="He sought for his missing friend far and wide.";
				break;
			case '1':
				$q="Men under 25 year of age will be selected.";
				$r="Men below 25 years of age will be selected.";
				break;
			case '2':
				$q="No one under an officer’s rank need apply.";
				$r="No one below an officer’s rank need apply.";
				break;			
			case '3':
				$q="My income is under Dt. 5000/- per month.";
				$r="My income is below Dt. 5000/- per month.";
				break;
			case '4':
				$q="Upon enquiry I found him guilty.";
				$r="On enquiry I found him guilty.";
				break;
			case '5':
				$q="I did not expect such treatment from your hand.";
				$r="I did not expect such a treatment at your hands.";
				break;
			case '6':
				$q="I am independent from my parents.";
				$r="I am independent of my parents.";
				break;
			case '7':
				$q="I beg pardon from you.";
				$r="I beg pardon of you.";
				break;
			case '8':
				$q="Poverty comes from idleness.";
				$r="Poverty comes of idleness.";
				break;
			case '9':
				$q="He is quick in understanding.";
				$r="He is quick of understanding.";
				break;
			case '10':
				$q="He is dull in hearing.";
				$r="He is dull of hearing.";
				break;
			case '11':
				$q="He is a man possessed with great wealth.";
				$r="He is a man possessed of great wealth.";
				break;
			case '12':
				$q="Be not a slave of smoking.";
				$r="Be not a slave to smoking.";
				break;
			case '13':
				$q="One angle is supplement of another.";
				$r="One angle is supplement to another.";
				break;
			case '14':
				$q="Never take up bad means to earn money.";
				$r="Never take to bad means to earn money.";
				break;
			case '15':
				$q="Health is essential for happiness.";
				$r="Health is essential to happiness.";
				break;
			case '16':
				$q="It is ten in my watch.";
				$r="It is ten by my watch.";
				break;
			case '17':
				$q="Your fault does not admit any excuse.";
				$r="Your fault does not admit of any excuse.";
				break;
			case '18':
				$q="You cannot conceive a better way than this.";
				$r="You cannot conceive of a better way than this.";
				break;
			case '19':
				$q="He is lame by the left leg.";
				$r="He is lame in the left leg.";
				break;
			case '20':
				$q="You are disqualified to manage your estate.";
				$r="You are disqualified from managing your estate.";
				break;
			case '21':
				$q="He persisted to say this.";
				$r="He persisted in saying this.";
				break;
			case '22':
				$q="He is charged of murder.";
				$r="He is charged with murder.";
				break;
			case '23':
				$q="I will communicate to him on this subject.";
				$r="I will communicate with him on this subject.";
				break;
			case '24':
				$q="I have no control on him.";
				$r="I have no control over him.";
				break;
			case '25':
				header('Location: profile.php');die;
				break;}
		break;	
	case '6':
		switch ($row[4]) {
			case '0':
				$q="He glanced at a letter.";
				$r="He glanced over a letter.";
				break;
			case '1':
				$q="I felt much grief at him.";
				$r="I felt much grief for him.";
				break;
			case '2':
				$q="There is no guarantee of his honesty.";
				$r="There is no guarantee for his honesty.";
				break;			
			case '3':
				$q="He is the heir to his uncle.";
				$r="He is the heir of his uncle.";
				break;
			case '4':
				$q="He is the heir of a large estate.";
				$r="He is the heir to a large estate.";
				break;
			case '5':
				$q="I am much concerned with your welfare.";
				$r="I am much concerned for your welfare.";
				break;
			case '6':
				$q="He is slow in accounts.";
				$r="He is slow at accounts.";
				break;
			case '7':
				$q="He is slow in hearing.";
				$r="He is slow of hearing.";
				break;
			case '8':
				$q="He couldn’t cope up with his work.";
				$r="He couldn’t cope with his work.";
				break;
			case '9':
				$q="He is not so tall as his brother.";
				$r="He is not as tall as his brother";
				break;
			case '10':
				$q="He is so clever as his brother.";
				$r="He is as clever as his brother.";
				break;
			case '11':
				$q="Copy it word by word.";
				$r="Copy it word for word.";
				break;
			case '12':
				$q="Your excuse holds no water.";
				$r="Your  excuse does not hold water.";
				break;
			case '13':
				$q="He left the town with bag and baggage.";
				$r="He left the town bag and baggage.";
				break;
			case '14':
				$q="He did not leave any stone upturned.";
				$r="He left no stone upturned.";
				break;
			case '15':
				$q="I am confident to win.";
				$r="I am confident of winning.";
				break;
			case '16':
				$q="I can talk English well.";
				$r="I can speak English well.";
				break;
			case '17':
				$q="The officer say my certificates.";
				$r="The officer looked into my certificates.";
				break;
			case '18':
				$q="Inform this accident to the police.";
				$r="Inform the police of this accident.";
				break;
			case '19':
				$q="Take care of her until she is with you.";
				$r="Take care of her as long as she is with you.";
				break;
			case '20':
				$q="One must learn to distinguish good from bad.";
				$r="One must learn to distinguish the good from the bad.";
				break;
			case '21':
				$q="I went there with a view to buy a book.";
				$r="I went there with a view to buying a book.";
				break;
			case '22':
				$q="I did nothing but cried.";
				$r="I did nothing but cry.";
				break;
			case '23':
				$q="Please write your name with ink.";
				$r="Please write your name in ink.";
				break;
			case '24':
				$q="To laugh or weep is entirely our own choice.";
				$r="To laugh or to weep is entirely our own choice.";
				break;
			case '25':
				header('Location: profile.php');die;
				break;}
		break;}
		//$_SESSION['q'] = $q;
		$_SESSION['r'] = $r;
		$_SESSION['row'] = $row;
		$_SESSION['e-mail'] = $row[0];
		$_SESSION['login'] = $row[1];

?>
</head>
<body style="background-color: #0af;">
<table style="height: 100%;width: 100%" align="center"><tr><td><h1 align="center">GRAMMAIRE QUESTION</h1></td>
	<tr><td  align="center"><p>there is a mistake in this phrase fix it</p></td></tr>
	<tr><td  align="center"><p><?php echo "$q"; ?></p></td></tr>
	<tr><td  align="center"><form name="formulaire" method="post" action="testg.php"><input type="text" name ="reponse" value=""></td></tr>
	<tr><td  align="center"><input type="submit" value="SEND"></form></td></tr>
	<tr><td  align="center"><a href="profile.php">Retour</a></td></tr>
</body>
</html>