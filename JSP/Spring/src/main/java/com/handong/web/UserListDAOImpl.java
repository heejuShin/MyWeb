package com.handong.web;

import java.util.ArrayList;
import java.util.List;

import org.springframework.stereotype.Repository;

@Repository("userListDAO")
public class UserListDAOImpl implements UserListDAO{

	@Override
	public List<UserListResponseDTO> getUserListdao() {
		// TODO Auto-generated method stub
		System.out.println("dao call");
		
		//리스트를 만든다.//
		List<UserListResponseDTO> userlist = new ArrayList<UserListResponseDTO>();
		
		//총 세명의 학생을 만든다.//
		UserListResponseDTO list = new UserListResponseDTO();
		list.setUserName("신희주");
		list.setUserAge("22");
		list.setUserAddress("대구 광역시");
		list.setUserImage("https://pbs.twimg.com/media/Duo_Z9NUUAQYW3k.jpg");
		
		userlist.add(list);
		
		UserListResponseDTO list2 = new UserListResponseDTO();
		list2.setUserName("신창규");
		list2.setUserAge("20");
		list2.setUserAddress("대구 광역시");
		list2.setUserImage("https://pbs.twimg.com/media/Duo_Z9NUUAQYW3k.jpg");
		
		userlist.add(list2);
		
		UserListResponseDTO list3 = new UserListResponseDTO();
		list3.setUserName("신성은");
		list3.setUserAge("17");
		list3.setUserAddress("대구 광역시");
		list3.setUserImage("https://pbs.twimg.com/media/Duo_Z9NUUAQYW3k.jpg");
		
		userlist.add(list3);
		return userlist;
	}

}
