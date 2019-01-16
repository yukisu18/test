package com.internousdev.webproj2.util;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

public class DBConnector {
	/**
	 * JDBCドライバー名
	 */
	private static String driverName = "com.mysql.jdbc.Driver";
	/**
	 * データベース接続URL
	 */
	private static String url = "jdbc:mysql://localhost/testdb_sugimoto";
	/**
	 * データベース接続ユーザー名
	 */

	private static String user = "root";
	/**
	 * データベース接続パスワード
	 */
	private static String password = "mysql";

	public Connection getConnection() {
		Connection con = null;

		try {
			Class.forName(driverName);
			con = (Connection) DriverManager.getConnection(url, user, password);
		} catch (ClassNotFoundException e) {
			e.printStackTrace();
		} catch (SQLException e) {
			e.printStackTrace();
		}
		return con;
	}
}

