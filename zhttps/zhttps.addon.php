<?php
/*
*�� �ҽ��ڵ�� ���� ����� ���� ��� �ֵ�� �� ���α׷� ������ ���� ������ �ֵ�� �Դϴ�.
*�ֵ�� ���� ����� �ñ��Ͻ� ���� �� �ֵ���� ���� ���� ������ �ǽñ⸦ �ٶ��ϴ�.
*���� �� ���۱��� : kmbfamily,�ֿ�,����
*������ Ȩ������ �� �󼼼��� : http://www.kmbfamily.net/software/478
*����� : https://github.com/kmbfamily/change-https
*���� : webmaster@kmbfamily.net �Ǵ� https://open.kakao.com/o/gOiNvsx
*/
	if(!defined('__XE__') || !defined('__ZBXE__')) exit();	//xe 1.4*~1.5* ȣȯ��,xe 1.6���ʹ� ��� ������� �����Դϴ�.
	if(!isset($_SERVER["HTTPS"])){				//���� https ������ �ƴҰ��
	//isset�� ���� ������ true�� ��ȯ�ϴµ� !isset�� �ݴ�� issert�� false�϶� ��
        $http_host = $addon_info->http_host;			//���� http ȣ��Ʈ�� �޾ƿͼ� ������ ����(������ ������ �����ΰ�)
	$https_port = Context::get('_https_port');		//xe������ ��ϵ� https ��Ʈ�� �޾ƿ� ������ ����!
        if(isset($https_port)) $https_port = ':'.$https_port;	//���࿡ https ��Ʈ��ȣ ���� ������ ��Ʈ��ȣ�� ���� �� ��������
	$redirect = "https://".$https_host.$http_port.$_SERVER['REQUEST_URL'];	//�����ΰ�+��Ʈ��ȣ��+�ڿ� ���� url ��ġ��
	header("Location: $redirect");		//�����̷�Ʈ ����
	}
	return;			//�� �ֵ�� ��(������ �ֵ���� ���� return����)
?>