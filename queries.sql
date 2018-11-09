CREATE DATABASE newhelpdesk;

/* User creation */
CREATE TABLE hd_users(
 u_id INT(11) NOT NULL AUTO_INCREMENT,
 u_first_name VARCHAR(255),
 u_last_name VARCHAR(255),
 u_mobile VARCHAR(20), 
 u_email VARCHAR(255),
 u_username VARCHAR(255),
 u_password VARCHAR(255),
 u_profile_pic TEXT,
 u_active TINYINT(1),
 u_phone_verify TINYINT(1),
 u_email_verify TINYINT(1),
 u_account_verify TINYINT(1),
 u_account_token VARCHAR(255),
 u_created_date DATETIME,
 u_created_source VARCHAR(255),
 u_updated_date DATETIME,
 u_logged_in DATETIME,
 PRIMARY KEY(u_id)
)