<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>spam_prevention</id>
    <query>
DELETE FROM `PREFIXmodules` where `id` like 'spam_prevention';
DROP TABLE if exists `PREFIXspam_prevention`;
DROP TABLE if exists `PREFIXspam_log`;
    </query>
</module>
