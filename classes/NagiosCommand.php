<?php



/**
 * Skeleton subclass for representing a row from the 'nagios_command' table.
 *
 * Nagios Command
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.
 */
class NagiosCommand extends BaseNagiosCommand {
	
	public function updateFromArray($source) {
		if(isset($source['command_name'])) $this->setName($source['command_name']);
		if(isset($source['command_desc'])) $this->setDescription($source['command_desc']);
		if(isset($source['command_line'])) $this->setLine($source['command_line']);
	}

} // NagiosCommand
