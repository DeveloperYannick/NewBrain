<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

$stmt = $dbh->prepare("SELECT * FROM users_badges WHERE user_id = :users_id AND badge_code = :badge_code");
$stmt->execute([":users_id" => $_SESSION['id'], ":badge_code" => $_POST["badge_id"]]);
if ($stmt->RowCount() > 0) {
	header("location: BadgeShopAlready");
	exit();
}
else {
	if ($_POST["cost_credits"] > 0) {
		$stmt = $dbh->prepare("SELECT credits FROM users WHERE id = :users_id");
		$stmt->execute([":users_id" => $_SESSION['id']]);
		while($row = $stmt->fetch()) {
			$userCredits = $row["credits"];
		}
		if ($userCredits >= $_POST["cost_credits"]) {
			$updated_cr = ($userCredits - $_POST["cost_credits"]);
			$stmt = $dbh->prepare("UPDATE users SET credits = :updated_cr WHERE id = :users_id");
			$stmt->execute([":updated_cr" => $updated_cr,":users_id" => $_SESSION['id']]);
			$stmt = $dbh->prepare("INSERT INTO users_badges (user_id, badge_code) VALUES (:users_id, :badge_code)");
			$stmt->execute([":users_id" => $_SESSION['id'], ":badge_code" => $_POST["badge_id"]]);
			header("location: BadgeShop");
			exit();
		}
		else {
			header("location: BadgeShopCredits");
			exit();
		}
		
	}
	else if ($_POST["cost_points"] > 0) {
		$stmt = $dbh->prepare("SELECT * FROM users_currency WHERE user_id = :users_id AND type = 0");
		$stmt->execute([":users_id" => $_SESSION['id']]);
		while($row = $stmt->fetch()) {
			$userPoints = $row["amount"];
		}
		if ($userPoints >= $_POST["cost_points"]) {
			$updated_di = ($userPoints - $_POST["cost_points"]);
			$stmt = $dbh->prepare("UPDATE users_currency SET amount = :updated_di WHERE user_id = :users_id AND type = 0");
			$stmt->execute([":updated_di" => $updated_di,":users_id" => $_SESSION['id']]);
			$stmt = $dbh->prepare("INSERT INTO users_badges (user_id, badge_code) VALUES (:users_id, :badge_code)");
			$stmt->execute([":users_id" => $_SESSION['id'], ":badge_code" => $_POST["badge_id"]]);
			echo $_POST["cost_points"]," ", $updated_di, " ", $_SESSION['id'];
		}
		else {
			header("location: BadgeShopDiamond");
			exit();
		}
	}
	else {
		echo "Error there was not an valid currency available!";
	}
}
