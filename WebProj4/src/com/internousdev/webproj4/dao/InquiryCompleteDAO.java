package com.internousdev.webproj4.dao;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;

import com.internousdev.webproj4.dto.InquiryDTO;
import com.internousdev.webproj4.util.DBConnector;

public class InquiryCompleteDAO {
	List<InquiryDTO>inquiryDTOList = new ArrayList<InquiryDTO>();

	public List<InquiryDTO> select() {
		DBConnector db = new DBConnector();
		Connection con = db.getConnection();
f
		String sql = "select*from inquiry";

		try {
			PreparedStatement ps = con.prepareStatement(sql);
			ResultSet rs = ps.executeQuery();

}
