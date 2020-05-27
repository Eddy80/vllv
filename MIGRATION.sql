INSERT INTO `vllvdb`.`lessons` 
SELECT `id`, `parentcatid` , `type`, `name`, `text`, `authorid`, `author`, `img`, `totaldurationinseconds`, `totalviewcount`, `orderid`,`created_at`, `updated_at`
FROM `vldb`.`vlcats`;


INSERT INTO `vllvdb`.`lessonvideos` 
SELECT *
FROM `vldb`.`vlvideos`;