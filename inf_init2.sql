CREATE TABLE User(
	user_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(20) NOT NULL UNIQUE,
    email VARCHAR(60) NOT NULL,
    age INT NOT NULL,
    address VARCHAR(60) NOT NULL,
    login BOOLEAN DEFAULT 0
);

CREATE TABLE Teacher(
	teacher_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(60) NOT NULL,
    email VARCHAR(60) NOT NULL,
    career INT NOT NULL
);

CREATE TABLE Course(
	course_id INT  AUTO_INCREMENT PRIMARY KEY,
    teacher_id INT NOT NULL,
    title VARCHAR(255) NOT NULL,
    category VARCHAR(255),
    price INT NOT NULL,
    discount INT DEFAULT 0 CHECK(discount >= 0 AND discount < 100),
    FOREIGN KEY (teacher_id) REFERENCES Teacher(teacher_id) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE Enrollment(
	enroll_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    course_id INT NOT NULL,
    price INT NOT NULL,
    date DATETIME NOT NULL DEFAULT NOW(),
	FOREIGN KEY (user_id) REFERENCES User(user_id) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (course_id) REFERENCES Course(course_id) ON DELETE CASCADE ON UPDATE CASCADE
);

INSERT INTO User VALUES(DEFAULT,'test','test@test.com',24,'서울시 구로구',DEFAULT); 
INSERT INTO User VALUES(DEFAULT,'이태호','xogh8755@naver.com',24,'서울시 구로구',DEFAULT); 
INSERT INTO User VALUES(DEFAULT,'김은서','seo@naver.com',27,'서울시 도봉구',DEFAULT); 
INSERT INTO User VALUES(DEFAULT,'김별','star@daum.net',16,'인천 연수구',DEFAULT);
INSERT INTO User VALUES(DEFAULT,'김율무','idontlikewalking@zxvswr.net',10,'서울시 성북구',DEFAULT);
INSERT INTO User VALUES(DEFAULT,'허지우','huh@kakao.com',26,'제주도 애월읍',DEFAULT);
INSERT INTO User VALUES(DEFAULT,'박준용','dragon32@gmail.com',30,'부산 광안리',DEFAULT);
INSERT INTO User VALUES(DEFAULT,'전병찬','chanchanhee@yahoo.com',22,'경기도 광주',DEFAULT);
INSERT INTO User VALUES(DEFAULT,'임수빈','waterkong@naver.com',43,'강원도 정선',DEFAULT);

INSERT INTO Teacher VALUES(DEFAULT,'김영한','younghan@asdf.com',7);  
INSERT INTO Teacher VALUES(DEFAULT,'널널한 개발자','freedeveloper@qwer.com',3);
INSERT INTO Teacher VALUES(DEFAULT,'토비','tobi@naver.com',1);
INSERT INTO Teacher VALUES(DEFAULT,'범쌤','tiger@zxcv.com',4);
INSERT INTO Teacher VALUES(DEFAULT,'코딩웍스','codingworks@flsl.com',2);
INSERT INTO Teacher VALUES(DEFAULT,'얄팍한 코딩사전','zxcvaw@daum.net',5);
INSERT INTO Teacher VALUES(DEFAULT,'조코딩','jocoding@gmail.com',2);
INSERT INTO Teacher VALUES(DEFAULT,'코드캠프','codecamp@inu.ac.kr',6);
INSERT INTO Teacher VALUES(DEFAULT,'김태원','kim23422@asdf.com',9);
INSERT INTO Teacher VALUES(DEFAULT,'인프런','inflearn@inflearn.com',12);

INSERT INTO Course VALUES(DEFAULT,1,'스프링 입문 - 코드로 배우는 스프링 부트,웹 MVC,DB 접근기술','java, spring, mvc',0,0);
INSERT INTO Course VALUES(DEFAULT,1,'스프링 핵심 원리 - 기본편','spring, backend',88000,25);
INSERT INTO Course VALUES(DEFAULT,1,'스프링 핵심 원리 - 고급편','spring, backend',121000,25);
INSERT INTO Course VALUES(DEFAULT,1,'스프링 부트 - 핵심 원리와 활용','spring, springboot, backend',99000,25);
INSERT INTO Course VALUES(DEFAULT,1,'모든 개발자를 위한 HTTP 웹 기본 지식','network',44000,25);
INSERT INTO Course VALUES(DEFAULT,2,'외워서 끝내는 네트워크 핵심이론 - 기초','network',77000,0);
INSERT INTO Course VALUES(DEFAULT,2,'외워서 끝내는 네트워크 핵심이론 - 응용','network',66000,0);
INSERT INTO Course VALUES(DEFAULT,2,'독하게 되새기는 C 프로그래밍','c',110000,0);
INSERT INTO Course VALUES(DEFAULT,3,'토비의 스프링 부트 - 이해와 원리','spring, springboot',99000,0);
INSERT INTO Course VALUES(DEFAULT,4,'디자인 시스템 with 피그마','figma',44000,0);
INSERT INTO Course VALUES(DEFAULT,5,'모바엘 웹 퍼블리싱 포트폴리오 with Figma','figma',105600,0);
INSERT INTO Course VALUES(DEFAULT,5,'최고의 프론트엔드 CSS Frameworks, Uikit','html, css',49500,0);
INSERT INTO Course VALUES(DEFAULT,6,'제대로 파는 HTML CSS - by 얄코','html, css',44000,25);
INSERT INTO Course VALUES(DEFAULT,7,'조코딩의 코딩 기초와 웹 풀스택 개발','html, css, nodejs',90200,0);
INSERT INTO Course VALUES(DEFAULT,8,'부트캠프에서 만든 고농축 백엔드 코스','nodejs',396000,0);
INSERT INTO Course VALUES(DEFAULT,8,'강력한 CSS','css',22000,0);
INSERT INTO Course VALUES(DEFAULT,9,'자바(JAVA) 알고리즘 문제풀이 입문: 코딩테스트 대비','java',77000,0);
INSERT INTO Course VALUES(DEFAULT,10,'프로그래밍 시작하기 : 파이썬 입문 (Inflearn Original)','python',33000,0);
INSERT INTO Course VALUES(DEFAULT,10,'우리를 위한 프로그래밍 : 파이썬 중급 (Inflearn Original)','python',55000,0);

