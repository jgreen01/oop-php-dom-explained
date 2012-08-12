<?php

	class ExplainOOP{
	
		private $i_priMemberVar;
		public $s_pubMemberVar;
		
		public function __construct(){
			$this->i_priMemberVar = 100;
			$this->s_pubMemberVar = "public string";
		}
		
		public function incPriMemberVar(){
			$this->i_priMemberVar++;
		}
		
		public function getPriMemberVar(){
			return $this->i_priMemberVar;
		}
		
	}
	
	$o_myObject = new ExplainOOP();
	
	$o_myObject->incPriMemberVar();

	echo '<br> $i_priMemberVar: ' . $o_myObject->getPriMemberVar();
	
	$o_myObject->s_pubMemberVar .= " here";
	
	echo '<br>' . $o_myObject->s_pubMemberVar;
?>

<?php

	include 'simple_html_dom.php';
	
	$HDOM_parserObject = new simple_html_dom();
	$HDOM_parserObject->load_file("./java.html");
	
	$HDOM_elementTitle = $HDOM_parserObject->find('title',0);
	
	echo '<br> title: ' . $HDOM_elementTitle->plaintext;
	
	foreach($HDOM_parserObject->find('p') as $HDOM_elementP)
            echo $HDOM_elementP->outertext;

?>

<html>
<title>example</title>
<body></body>
</html>
