<div class="page" ng-app>
	<div class="side">this is side</div>
	<div class="content">
		'스나이퍼'는 취향을 저격한다 는 의미를 가진 아이디어. </br>
		모든 단어를 총과 관련해서 짓고 시크하고 댄디한 컨셉을 가져간다.</br>
		->샷, 건, 저격, 조준 </br> 
		
		제목</br>
		<input type="text" ng-model="name" name="item-name"></br>
		url</br>
		<input type="text" ng-model="url" name="item-url"></br>
		설명</br>
		<input type="text" ng-model="desc" name="item-desc"></br>
		<button>입력</button>
		

		<ul class="item-box">
			<li class="item-list">
				{{name}} </br>
				{{url}} </br>
				{{desc}} </br>
	
			</li>

		</ul>
		<?php 
		//TODO: input url 
		//TODO: crawling url
		//TODO: display image & text
		//TODO: insert into my list


		?>

	</div>
</div>



<?php 

function dosomething(){

	echo 'function works';
}
?>