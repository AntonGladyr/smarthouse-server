
-- USER

CREATE DATABASE IF NOT EXISTS HomeControl;
CREATE USER IF NOT EXISTS 'homecontrol'@'localhost' IDENTIFIED BY 'unicorn';
GRANT ALL ON HomeControl.* TO 'homecontrol'@'localhost';




-- TABLES;

USE HomeControl;
CREATE TABLE temperatures(
	time DATETIME,
    controller VARCHAR(20),
    value_type VARCHAR(20),
    value FLOAT
);




-- FUNCTIONS;

DELIMITER //;
CREATE FUNCTION max_time()
RETURNS DATETIME
DETERMINISTIC
BEGIN
	DECLARE result DATETIME;
    SELECT MAX(time) INTO result FROM temperatures;
	RETURN result;
END//;
DELIMITER ;

