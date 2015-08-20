<?php

/* This file is part of Jeedom.
 *
 * Jeedom is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Jeedom is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Jeedom. If not, see <http://www.gnu.org/licenses/>.
 */

/* * ***************************Includes********************************* */
require_once dirname(__FILE__) . '/../../../../core/php/core.inc.php';

class ifttt extends eqLogic {
	/*     * *************************Attributs****************************** */

	/*     * ***********************Methode static*************************** */

	public static function event() {
		$cmd = iftttCmd::byId(init('id'));
		if (!is_object($cmd)) {
			throw new Exception('Commande ID ifttt inconnu : ' . init('id'));
		}
		$cmd->event(init('value'));
	}

	/*     * *********************Méthodes d'instance************************* */

	/*     * **********************Getteur Setteur*************************** */
}

class iftttCmd extends cmd {
	/*     * *************************Attributs****************************** */

	/*     * ***********************Methode static*************************** */

	/*     * *********************Methode d'instance************************* */
	public function preSave() {
		if ($this->getType() == 'info') {
			$this->setEventOnly(1);
		}
	}

	public function execute($_options = array()) {
		$replace = array();
		switch ($this->getSubType()) {
			case 'slider':
				$replace['#slider#'] = $_options['slider'];
				break;
			case 'color':
				$replace['#color#'] = $_options['color'];
				break;
			case 'message':
				$replace['#title#'] = $_options['title'];
				$replace['#message#'] = $_options['message'];
				break;
		}

		$eqLogic = $this->getEqLogic();
		$url = 'https://maker.ifttt.com/trigger/' . $this->getConfiguration('event', 'jeedom') . '/with/key/' . $eqLogic->getConfiguration('key') . '?';
		if ($this->getConfiguration('value1') != '') {
			$url .= 'value1=' . urlencode(jeedom::evaluateExpression(str_replace(array_keys($replace), $replace, $this->getConfiguration('value1')))) . '&';
		}
		if ($this->getConfiguration('value2') != '') {
			$url .= 'value2=' . urlencode(jeedom::evaluateExpression(str_replace(array_keys($replace), $replace, $this->getConfiguration('value2')))) . '&';
		}
		if ($this->getConfiguration('value3') != '') {
			$url .= 'value3=' . urlencode(jeedom::evaluateExpression(str_replace(array_keys($replace), $replace, $this->getConfiguration('value3')))) . '&';
		}
		$url = trim($url, '&');
		$request_http = new com_http($url);
		$request_http->exec(5, 3);
	}

	/*     * **********************Getteur Setteur*************************** */
}

?>
