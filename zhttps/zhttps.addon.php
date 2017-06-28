<?php
/*
*이 소스코드는 실제 사용을 위한 상용 애드온 겸 프로그램 교육을 위한 간단한 애드온 입니다.
*애드온 제작 방법이 궁금하신 분은 이 애드온을 통해 많은 도움이 되시기를 바랍니다.
*개발 및 저작권자 : kmbfamily,주영,소현
*제작자 홈페이지 및 상세설명 : http://www.kmbfamily.net/software/478
*깃허브 : https://github.com/kmbfamily/change-https
*문의 : webmaster@kmbfamily.net 또는 https://open.kakao.com/o/gOiNvsx
*/
	if(!defined('__XE__') || !defined('__ZBXE__')) exit();	//xe 1.4*~1.5* 호환용,xe 1.6부터는 없어도 상관없는 구문입니다.
	if( $called_position !== 'before_module_init' ) return; //xe 개발자 설명서 참고
	if(!isset($_SERVER["HTTPS"])){				//만일 https 접속이 아닐경우
	//isset는 값이 있을때 true를 반환하는데 !isset는 반대로 issert가 false일때 참
	$https_port = Context::get('_https_port');		//xe설정에 등록된 https 포트값 받아와 변수에 저장!
        if(isset($https_port)) $https_port = ':'.$https_port;	//만약에 https 포트번호 값이 있을때 포트번호값 설정 및 변수저장
	header("Location: https://".$_SERVER['HTTP_HOST'].$https_port.$_SERVER['REQUEST_URI']);		//url변수값 합쳐서 리다이렉트 실행
	/*
	*변수 설명
	$_SERVER['HTTP_HOST'] = http 서버에 설정된 도메인값
	$https_port = 포트값
	$_SERVER['REQUEST_URI'] = 도메인 / 뒤로 오는 응답 url값
	*/
	}
	return;			//이 애드온 끝(웬만한 애드온의 끝은 return으로)
?>