<?php
	if(isset($_POST['acao'])){
		$ch1 = res(isset($_POST['adm']));
		$ch2 = res(isset($_POST['des']));
		$ch3 = res(isset($_POST['jod']));
		$ch4 = res(isset($_POST['con']));
		$ch5 = res(isset($_POST['edi']));
		$ch6 = res(isset($_POST['tur']));
		$Pta = ver($ch1, $ch2, $ch3, $ch4, $ch5, $ch6);
		
		$ch1 = res(isset($_POST['get']));
		$ch2 = res(isset($_POST['log']));
		$ch3 = res(isset($_POST['des']));
		$ch4 = res(isset($_POST['exa']));
		$ch5 = res(isset($_POST['com']));
		$Ptb = ver2($ch1, $ch2, $ch3, $ch4, $ch5);
		
		$ch1 = res(isset($_POST['org']));
		$ch2 = res(isset($_POST['cal']));
		$ch3 = res(isset($_POST['cri']));
		$ch4 = res(isset($_POST['plan']));
		$ch5 = res(isset($_POST['ana']));
		$ch6 = res(isset($_POST['des']));
		$Ptc = ver($ch1, $ch2, $ch3, $ch4, $ch5, $ch6);
		
		$ch1 = res(isset($_POST['k']));
		$ch2 = res(isset($_POST['k2']));
		$Ptd = ver3($ch1, $ch2);

		red($Pta, $Ptb, $Ptc, $Ptd);
	}
	else{
		$url = "form.html";
		header('Location: '.$url);
	}
	function res($value)
	{
		if($value != 1){
			$res = "0";
		}else{
			$res = "1";
		}
		return $res;
	}
	function ver($v1, $v2, $v3, $v4, $v5, $v6){
			if($v1=="1"){
				$res = 1;
			}
			else if($v2=="1"){
				$res = 2;
			}
			else if($v3=="1"){
				$res = 3;
			}
			else if($v4=="1"){
				$res = 4;
			}
			else if($v5=="1"){
				$res = 5;
			}
			else if($v6=="1"){
				$res = 6;
			}else{
				$url = "form.html";
				header('Location: '.$url);
			}
		return $res;
	}
	function ver2($v1, $v2, $v3, $v4, $v5){
			if($v1=="1"){
				$res = 1;
			}
			else if($v2=="1"){
				$res = 2;
			}
			else if($v3=="1"){
				$res = 3;
			}
			else if($v4=="1"){
				$res = 4;
			}
			else if($v5=="1"){
				$res = 5;
			}else{
				$url = "form.html";
				header('Location: '.$url);
			}
		return $res;
	}
	function ver3($v1, $v2){
			if($v1=="1"){
				$res = 1;
			}
			else if($v2=="1"){
				$res = 2;
			}else{
				$url = "form.html";
				header('Location: '.$url);
			}
		return $res;
	}
	function red($v1, $v2, $v3, $v4){
		$s = $v1+$v2+$v3+$v4;
		if($s=4){
			$url = "adm.html";
			header('Location: '.$url);
		}
		else if($s==7){
			$url = "des.html";
			header('Location: '.$url);
		}else if($s==10){
			$url = "jod.html";
			header('Location: '.$url);
		}else if($s==13){
			$url = "cont.html";
			header('Location: '.$url);
		}else if($s==14){
			$url = "ed.html";
			header('Location: '.$url);
		}else if($s==16){
			$url = "tur.html";
			header('Location: '.$url);
		}else{
			$url = "index.html";
			header('Location: '.$url);
		}
	}
?>