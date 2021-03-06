<?php
/**
 * Advanced OpenSales, Advanced, robust set of sales modules.
 * @package Advanced OpenSales for SugarCRM
 * @copyright SalesAgility Ltd http://www.salesagility.com
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU AFFERO GENERAL PUBLIC LICENSE
 * along with this program; if not, see http://www.gnu.org/licenses
 * or write to the Free Software Foundation,Inc., 51 Franklin Street,
 * Fifth Floor, Boston, MA 02110-1301  USA
 *
 * @author SalesAgility <info@salesagility.com>
 */
global $db;
$dateTime=$_POST['dateTime'];
$frame_id=$_POST['frame_id'];

if($dateTime){
        $sql="SELECT
	hp.`name`
FROM
	haa_frameworks hf,
	haa_period_sets hps,
	haa_periods hp
WHERE 1=1
and hf.deleted=0
and hps.deleted=0
and hp.deleted=0
and hf.id=hps.haa_frameworks_id_c
and hps.id=hp.haa_period_sets_id_c
and hp.start_date<='".$dateTime."'".
"and hp.end_date>='".$dateTime."'".
"and hf.id='".$frame_id."'";
        $result=$db->query($sql);
        $row=$db->fetchByAssoc($result);
        echo  $row['name'];   
    }
?>
