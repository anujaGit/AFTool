--
-- Table structure for table `tb_user`
--
 
CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `useremail` varchar(128) NOT NULL,
  `username` varchar(32) NOT NULL,
  `userpassword` varchar(128) NOT NULL,
  `termcondition` tinyint(1) NOT NULL DEFAULT '0',
  `userstatus` tinyint(4) NOT NULL DEFAULT '0',
  `token` varchar(128) NOT NULL,
  `dt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
 
--
-- Indexes for dumped tables
--
 
--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);
 
--
-- AUTO_INCREMENT for dumped tables
--
 
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;




CREATE TABLE `tb_callee` (
   `id` INT NOT NULL AUTO_INCREMENT ,
   `user_id` INT(11)
   `name` VARCHAR(64) NOT NULL ,
   `phone_number` VARCHAR(10) NOT NULL ,
   `remark` VARCHAR(24) NOT NULL ,
   `order_type` VARCHAR(24) NOT NULL ,
   `reference_by` VARCHAR(24) NOT NULL ,
   `reference_any` VARCHAR(24) NOT NULL ,
   `dt` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ,
   PRIMARY KEY (`id`)
) ENGINE = MyISAM;