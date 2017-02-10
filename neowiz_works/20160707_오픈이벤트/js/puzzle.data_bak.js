var puzzleData = [
	{
		aspect : "hori", //가로 세로
		today : { m:12,d:20,dt:2},// m:달 , d:일 , dt:요일(1==월요일)
		anum : 1, //가로세로 번호 
		idx : 0, //문제 0 
		q : "지상의 적에게 강력한 전격 공격을 가하는 최상위의 작전형 드론은?",
		hint : "그리스 신화에 나오는 최고신으로 주로 번개를 사용한다.",
		a : "제우스", //정답
		size : 3,//단어 크기
		pos : 3,//칸 위치 (순차가로나열)

	},
	{
		aspect : "verti",
		today : { m:12,d:21,dt:3},
		anum : 1,
		idx : 1,
		q : "투척형 탐지장비로 적의 위치를 표시하며 쫓아 움직이는 드론은?",
		hint : "관심있는 상대를 병적으로 집요하게 쫓아 다니며 괴롭히는 사람",
		a : "스토커",
		size : 3,
		pos : 5,

	},
	{
		aspect : "hori",
		today : { m:12,d:22,dt:4},
		anum : 2,
		idx : 2,
		q : "타블렛의 3군데 폭격지점을 선택하면 폭탄을 투하하는 드론은?",
		hint : "축구 경기에서 득점이 뛰어난 선수를 일컫는 말",
		a : "스트라이커",
		size : 5,
		pos : 29,

	},
	{
		aspect : "verti",
		today : { m:12,d:23,dt:5},
		anum : 2,
		idx : 3,
		q : "플레이어 주변의 적을 레이저로 표시하며 소음 기관총으로 공격하는 드론은?",
		hint : "개인이나 단체가 무사하도록 유도하거나 호위하는 일",
		a : "에스코트",
		size : 4,
		pos : 15,

	},
	{
		aspect : "hori",
		today : { m:12,d:24,dt:6},
		anum : 3,
		idx : 4,
		q : "적에게 강렬한 레이저 빔을 쏘아 시야를 방해하는 드론은?",
		hint : "이탈리아의 대표적인 소프트 치즈로 OOO졸라, <em>OOO시스템</em>",
		a : "고르곤시스템",
		size : 6,
		pos : 9,

	},
	{
		aspect : "verti",
		today : { m:12,d:25,dt:7},
		anum : 3,
		idx : 5,
		q : "플레이어를 따라다니며 주위의 적을 탐지한 뒤 미니맵에 표시하는 드론은?",
		hint : "적국의 내정,동정 등을 탐지하여 보고하는 자로 007 제임스 본드가 대표적",
		a : "스파이",
		size : 3,
		pos : 13,

	},
	{
		aspect : "hori",
		today : { m:12,d:26,dt:1},
		anum : 4,
		idx : 6,
		q : "발사하면 상승한 뒤 모니터를 통해 표시 된 적을 찾아 격돌하는 드론은?",
		hint : "웨슬리스나입스가 출연한 뱀파이어 영화 시리즈의 제목",
		a : "블레이드",
		size : 4,
		pos : 39,

	},
	{
		aspect : "verti",
		today : { m:12,d:27,dt:2},
		anum : 4,
		idx : 7,
		q : "고르곤시스템, LAWS, 에스코트 드론이 이것을 사용한다.",
		hint : "PC 주변 기기를 대표하는 브랜드 중 하나",
		a : "레이저",
		size : 3,
		pos : 40,

	},
	{
		aspect : "hori",
		today : { m:12,d:28,dt:3},
		anum : 5,
		idx : 8,
		q : "상공을 선회하며 강력한 미니건으로 공격하는 무인 헬기 드론은?",
		hint : "르네상스 시대의 무기인 도끼창과 동일한 발음",
		a : "헬버드",
		size : 3,
		pos : 49,

	},
	{
		aspect : "verti",
		today : { m:12,d:29,dt:4},
		anum : 5,
		idx : 9,
		q : "공격형, 작전형 배틀 포인트를 획득할 수 있으며, 드론에 따라 획득량이 다르다.",
		hint : "Drone과 Destroy의 합성어, <em>드O파O</em>",
		a : "드론파괴",
		size : 4,
		pos : 28,

	},
	{
		aspect : "hori",
		today : { m:12,d:30,dt:5},
		anum : 6,
		idx : 10,
		q : "비행 드론이 모든 적의 위치를 미니맵에 계속 표시해 주는 드론은?",
		hint : "무인 비행기과 정찰을 의미하는 단어의 합성어",
		a : "UAV리콘",
		size : 5,
		pos : 86,

	},
	{
		aspect : "verti",
		today : { m:12,d:31,dt:6},
		anum : 6,
		idx : 11,
		q : "적 발견 시 아군 모두에게 보이는 특별한 표식을 남기는 드론은?",
		hint : "보는 사람, 목격자를 뜻하는 말, <em>O저O</em>",
		a : "옵저버",
		size : 3,
		pos : 22,

	},
	{
		aspect : "hori",
		today : { m:1,d:1,dt:7},
		anum : 7,
		idx : 12,
		q : "호출한 플레이어를 따라 다니며 위치를 감춰주는 드론은?",
		hint : "롤러 더비에서 팀의 점수를 얻기 위해 상대 팀 선수를 앞지르려고 하는 선수",
		a : "재머",
		size : 2,
		pos : 115,

	},
	{
		aspect : "verti",
		today : { m:1,d:2,dt:1},
		anum : 7,
		idx : 13,
		q : "내가 호출한 드론을 통해 적을 사살, 공격형 배틀포인트를 획득할 수 있다.",
		hint : "Drone과 Kill의 합성어, <em>O론O</em>",
		a : "드론킬",
		size : 3,
		pos : 51,

	},
	{
		aspect : "hori",
		today : { m:1,d:3,dt:2},
		anum : 8,
		idx : 14,
		q : "기본적으로 배틀 포인트를 획득할 수 있는 방법은?",
		hint : "스톱워치와 같이 시간을 기록하는 것, <em>TimeOO</em>",
		a : "타이머",
		size : 3,
		pos : 127,

	},
	{
		aspect : "verti",
		today : { m:1,d:4,dt:3},
		anum : 8,
		idx : 15,
		q : "비행 드론이 적의 레이더를 방해하여 미니맵을 사용할 수 없게 만드는 드론은?",
		hint : "무인 비행기과 전파방해를 의미하는 단어의 합성어",
		a : "UAV재머",
		size : 5,
		pos : 73,

	},
	{
		aspect : "hori",
		today : { m:1,d:5,dt:4},
		anum : 9,
		idx : 16,
		q : "전방에 투척하여 유도장치로 방향 조정을 한 뒤 적에게 폭발 시키는 드론은?",
		hint : "반딧불이, 개똥벌레",
		a : "파이어플라이",
		size : 6,
		pos : 107,

	},
	{
		aspect : "verti",
		today : { m:1,d:6,dt:5},
		anum : 9,
		idx : 17,
		q : "강력한 지상 공격 병기 드론으로 실내나 장애물이 많은 공간에서는 호출이 불가능하다.",
		hint : "금속과 저승사자를 합친 합성어, <em>OO리퍼</em>",
		a : "메탈리퍼",
		size : 4,
		pos : 61,

	},
	{
		aspect : "hori",
		today : { m:1,d:7,dt:6},
		anum : 10,
		idx : 18,
		q : "드론을 호출하기 위한 점수는 ?",
		hint : "싸움과 점수의 합성어, <em>배O포O트</em>",
		a : "배틀포인트",
		size : 5,
		pos : 147,

	},
	{
		aspect : "verti",
		today : { m:1,d:8,dt:7},
		anum : 10,
		idx : 19,
		q : "내가 피해를 입힌 적을 아군이 죽일 때 얻게 되는 포인트는?",
		hint : "도움을 뜻하는 말로 스포츠 경기에서 자주 사용 되는 단어",
		a : "어시스트",
		size : 4,
		pos : 109,

	},
	{
		aspect : "hori",
		today : { m:1,d:9,dt:1},
		anum : 11,
		idx : 20,
		q : "제우스 드론의 공격 방식",
		hint : "쉐보레에서 제조한 차량 중 동일한 이름을 가지고 있다.",
		a : "스파크",
		size : 3,
		pos : 155,

	},
	{
		aspect : "verti",
		today : { m:1,d:10,dt:2},
		anum : 11,
		idx : 21,
		q : "투척하면 낮은 지형을 타고 넘어가 적에게 폭발 데미지를 주는 드론은?",
		hint : "웹 정보수집 프로그램을 일컫는 말로 스파이더 라고도 부른다.",
		a : "크롤러",
		size : 3,
		pos : 157,

	},
	{
		aspect : "hori",
		today : { m:1,d:11,dt:3},
		anum : 12,
		idx : 22,
		q : "적의 드론이나 투척무기를 요격하는 레이저 빔을 발사하는 드론은?",
		hint : "Laser Weapon System 약자로 미국방성에서 연구 중인 근접 방어 체계 명칭",
		a : "LAWS",
		size : 4,
		pos : 187,

	},
	{
		aspect : "verti",
		today : { m:1,d:12,dt:4},
		anum : 12,
		idx : 23,
		q : "자신의 무기로 적을 죽이는 행위로 배틀 포인트를 획득할 수 있다.",
		hint : "퍼스트O, 더블O, 트리플O, 펜타O 공통으로 들어가는 <em>영어단어 스펠링</em>",
		a : "KILL",
		size : 4,
		pos : 145,

	},
	{
		aspect : "hori",
		today : { m:1,d:13,dt:5},
		anum : 13,
		idx : 24,
		q : "변화하는 전장과 드론을 활용한 OO형 FPS의 재미를 느낄 수 있다.",
		hint : "전쟁 또는 전투 상황에 대처하기 위한 기술과 방법",
		a : "전술형",
		size : 3,
		pos : 166,

	},
	{
		aspect : "verti",
		today : { m:1,d:14,dt:6},
		anum : 13,
		idx : 25,
		q : "스트라이커 드론을 사용하면 이것이 날라와 폭격을 한다.",
		hint : "공격 목적으로 사용되는 군용기",
		a : "전투기",
		size : 3,
		pos : 166,

	},
	{
		aspect : "hori",
		today : { m:1,d:15,dt:7},
		anum : 14,
		idx : 26,
		q : "스파이, 스토커, UAV 리콘 드론의 기능을 가진 기계를 일컫는 말은?",
		hint : "어떤 사물의 소재를 알아내는데 쓰는 기계",
		a : "탐지기",
		size : 3,
		pos : 192,

	},
	{
		aspect : "verti",
		today : { m:1,d:16,dt:1},
		anum : 14,
		idx : 27,
		q : "드론 타입 중 하나로 메탈리퍼, 헬버드, 크롤러 등이 포함되어있다.",
		hint : "나아가 적을 때리는 행위, <em>OO형</em>",
		a : "공격형",
		size : 3,
		pos : 126,

	}
];
var puzzleUserData = [
	{
		answer : "제우스", //유저 입력답

	},
	{
		answer : "스토커",

	},
	{
		answer : "스트라이커",

	},
	{
		answer : "에스코트",

	},
	{
		answer : "고르곤시스템",

	},
	{
		answer : "스파이",

	},
	{
		answer : "블레이드",

	},
	{
		answer : "레이저",

	},
	{
		answer : "헬버드",

	},
	{
		answer : "",

	},
	{
		answer : "",

	},
	{
		answer : "",

	},
	{
		answer : "",

	},
	{
		answer : "",

	},
	{
		answer : "",

	},
	{
		answer : "",

	},
	{
		answer : "",

	},
	{
		answer : "",

	},
	{
		answer : "",

	},
	{
		answer : "",

	},
	{
		answer : "",

	},
	{
		answer : "",

	},
	{
		answer : "",

	},
	{
		answer : "",

	},
	{
		answer : "",

	},
	{
		answer : "",

	},
	{
		answer : "",

	},
	{
		answer : "",

	}
];


