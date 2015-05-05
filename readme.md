##PHP DB MySQL 处理类

###增

	$DB->insert('tb_name',$data);

###删

	$DB->delete('tb_name',$where);

###改

	$DB->update('tb_name',$data,$where);

###查

	$DB->get_all($sql);
	$DB->get_one($sql);
